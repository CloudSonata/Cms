<?php
namespace Rusty\NewsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class PostAdmin extends Admin
{
    protected $baseRouteName = 'news_post_admin';
    protected $baseRoutePattern = "/blog/post";
    
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('title')
                ->add('abstract')
                ->add('content')
                ->add('category')
                ->add('enabled', null, array('required' => false))                
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('title')
                ->add('abstract')
                ->add('content')
                ->add('category')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('title')
                ->add('category')
                ->add('enabled')
        ;
    }
}