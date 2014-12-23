<?php

namespace TMS\UserJoinPageBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Ibw\JobeetBundle\Entity\Job;
 
class UserAdmin extends Admin
{
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'created_at'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
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
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
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
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
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
 
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
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
	
	
	public function getBatchActions()
	{
		// retrieve the default (currently only the delete action) actions
		$actions = parent::getBatchActions();
	 
		// check user permissions
		if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')){
			$actions['extend'] = array(
				'label'            => 'Extend',
				'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
			);
	 
			$actions['deleteNeverActivated'] = array(
				'label'            => 'Delete never activated jobs',
				'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
			);
		}
	 
		return $actions;
	}
}
?>