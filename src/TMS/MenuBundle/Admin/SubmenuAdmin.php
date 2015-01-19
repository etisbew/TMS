<?php
namespace TMS\MenuBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use TMS\MenuBundle\Entity\Submenu;
 
class SubmenuAdmin extends Admin
{
    // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'created_at'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('menu')
            ->add('description')
            ->add('href')
            ->add('action')
			//->add('order')
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('menu')
            ->add('description')
            ->add('href')
            ->add('action')
			///->add('order')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('menu')
            ->add('description')
            ->add('href')
            ->add('action')
			//->add('order')
        ;
    }
 
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
          ->add('menu')
            ->add('description')
            ->add('href')
            ->add('action')
			//->add('order')
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