<?php

namespace TMS\UserJoinPageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

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
            ->add('last_name')
            ->add('email')
            ->add('password')
            ->add('salt')
            ->add('status')
            ->add('id_chat_status')
            ->add('sex')
            ->add('descriptionMe')
            ->add('country')
            ->add('city')
            ->add('date_of_birth')
            ->add('date_reg')
            ->add('date_last_login')
            ->add('type')
            ->add('facebook_url')
            ->add('twitter_url')
            ->add('youtube_url')
            ->add('myspace_url')
            ->add('id_paypal')
            ->add('id_media')
            ->add('record_label')
            ->add('id_music_genre')
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
        return 'tms_userjoinpagebundle_user';
    }
}
