<?php

namespace TMS\AuthorsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TMS\AuthorsBundle\Entity\Authors;
use TMS\AuthorsBundle\Form\AuthorsType;

/**
 * Authors controller.
 *
 */
class AuthorsController extends Controller
{

    /**
     * Lists all Authors entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TMSAuthorsBundle:Authors')->findAll();

        return $this->render('TMSAuthorsBundle:Authors:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Authors entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Authors();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tms_authors_show', array('id' => $entity->getId())));
        }

        return $this->render('TMSAuthorsBundle:Authors:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Authors entity.
     *
     * @param Authors $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Authors $entity)
    {
        $form = $this->createForm(new AuthorsType(), $entity, array(
            'action' => $this->generateUrl('tms_authors_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Authors entity.
     *
     */
    public function newAction()
    {
        $entity = new Authors();
        $form   = $this->createCreateForm($entity);

        return $this->render('TMSAuthorsBundle:Authors:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Authors entity.
     * 
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMSAuthorsBundle:Authors')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Authors entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TMSAuthorsBundle:Authors:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Authors entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMSAuthorsBundle:Authors')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Authors entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TMSAuthorsBundle:Authors:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Authors entity.
    *
    * @param Authors $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Authors $entity)
    {
        $form = $this->createForm(new AuthorsType(), $entity, array(
            'action' => $this->generateUrl('tms_authors_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Authors entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMSAuthorsBundle:Authors')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Authors entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tms_authors_edit', array('id' => $id)));
        }

        return $this->render('TMSAuthorsBundle:Authors:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Authors entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TMSAuthorsBundle:Authors')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Authors entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tms_authors'));
    }

    /**
     * Creates a form to delete a Authors entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tms_authors_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
