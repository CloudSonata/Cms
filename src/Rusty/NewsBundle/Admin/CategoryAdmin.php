<?php
namespace Rusty\NewsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class CategoryAdmin extends Admin {

    protected $baseRouteName = 'news_category_admin';
    protected $baseRoutePattern = "/blog/category";

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('name')
                ->add('enabled', null, array('required' => false))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('name')
//                ->add('posts')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('name')
                ->add('enabled')
        ;
    }

//    public function validate(ErrorElement $errorElement, $object) {
//        $errorElement
//                ->with('name')
//                ->assertMaxLength(array('limit' => 32))
//                ->end()
//        ;
//    }
}