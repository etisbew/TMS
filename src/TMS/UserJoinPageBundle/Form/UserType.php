<?php

namespace TMS\UserJoinPageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use TMS\UserJoinPageBundle\Entity\User;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('user_type')
		    ->add('nick_name')
            ->add('first_name')
            ->add('email','email')
            /*->add('password','password')*/
			->add('password', 'repeated', array(
					'type' => 'password',
					'invalid_message' => 'The password fields must match.',
					'options' => array('attr' => array('class' => 'form-control')),
					'required' => true,
					'first_options'  => array('label' => 'Password'),
					'second_options' => array('label' => 'Confirm Password'),
				))
			->add('join', 'submit', array('attr' => array('class' => 'btn btn-success')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMS\UserJoinPageBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        //return 'ms_msbundle_user';
		return 'tms_userjoinpagebundle_user';
    }
}
