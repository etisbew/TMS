<?php

namespace TMS\AuthorsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuthorsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('user')
            //->add('parent_submission')
            ->add('name')
            //->add('dob')
            //->add('dead_when')
            ->add('anonymous')
            //->add('pseudonymousn')
            ->add('pseudonym')
            ->add('contribution')
            ->add('completed_year')
            //->add('published_when')
            //->add('published_where')
            //->add('isbn')
            ->add('nationality')
            ->add('citizen')
            //->add('domicilied')
			  ->add('join', 'submit', array('attr' => array('class' => 'btn btn-success')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMS\AuthorsBundle\Entity\Authors'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tms_authorsbundle_authors';
    }
}
