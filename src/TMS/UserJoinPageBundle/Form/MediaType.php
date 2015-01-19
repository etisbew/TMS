<?php

namespace TMS\UserJoinPageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use TMS\UserJoinPageBundle\Entity\media;

class mediaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('media_type')
			->add('media_url', 'file', array('label' => 'Media url', 'required' => false))
			//->add('media_url')
			->add('media_title') 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TMS\UserJoinPageBundle\Entity\media'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        //return 'ms_msbundle_user';
		return 'tms_userjoinpagebundle_media';
    }
}
