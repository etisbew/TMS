<?php

namespace TMS\UserJoinPageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TMS\UserJoinPageBundle\Entity\User;
use TMS\UserJoinPageBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TMSUserJoinPageBundle:User')->findAll();

        return $this->render('TMSUserJoinPageBundle:User:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));
        }

        return $this->render('TMSUserJoinPageBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('TMSUserJoinPageBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMSUserJoinPageBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TMSUserJoinPageBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMSUserJoinPageBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TMSUserJoinPageBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TMSUserJoinPageBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('user_edit', array('id' => $id)));
        }

        return $this->render('TMSUserJoinPageBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TMSUserJoinPageBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tms_user'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
	
	public function forgotpwdAction()
	{
		//return $this->render('TMSUserJoinPageBundle:User:forgotpwd.html.twig');
		  $entity = new User();
		$form   = $this->createCreateForm($entity);

        return $this->render('TMSUserJoinPageBundle:User:forgotpwd.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
	}
	//login
	
		 public function loadUserByUsername($username)
	{
		/** @var $em EntityManager */
		$em = $this->container->get('doctrine')->getManager();
		$user = $em->getRepository('TMSUserJoinPageBundle:User')->findOneBy(array('email' => $username));
		if ($user != null) {
			return $user;
		}
		return false;
	}
	
	public function UserLoginAction(Request $request)
	{
		 $username=$request->get('_username');
		 $password=$request->get('_password');
		/** @var $user User */
		$user = $this->loadUserByUsername($username);//use function loadUserByUsername above
		
		if ($user) {
			//$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
			//encode Password from password & salt of user
		   // $encodedPass = $encoder->encodePassword($password, $user->getSalt());
			if ($password == $user->getPassword()) {
				$error = '';
				//login info is true, you can return $user
				//return true;
				return $this->render('TMSUserJoinPageBundle:User:home.html.twig', array(
            'error'      => $error,
        ));
			}
		}
		//login info is false
		$error = 'Invalid username & password';
		return $this->render('TMSUserJoinPageBundle:User:index.html.twig', array(
            'error'      => $error,
        ));
	}
	public function PrivacyPolicyAction()
    {
        return $this->render('TMSUserJoinPageBundle:User:privacy_policy.html.twig');
    }
	public function TermsConditionsAction()
    {
        return $this->render('TMSUserJoinPageBundle:User:terms_conditions.html.twig');
    }
	public function JobOpportunitiesAction()
    {
        return $this->render('TMSUserJoinPageBundle:User:jobopportunities.html.twig');
    }
	public function InviteAFriendAction()
    {
        return $this->render('TMSUserJoinPageBundle:User:invite_a_friend.html.twig');
    }
	public function ContactUsAction()
    {
        return $this->render('TMSUserJoinPageBundle:User:contact_us.html.twig');
    }
	public function AdvertiseAction()
    {
        return $this->render('TMSUserJoinPageBundle:User:advertise.html.twig');
    }
}
