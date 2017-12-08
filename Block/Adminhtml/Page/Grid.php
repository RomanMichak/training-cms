<?php

class Training_Cms_Block_Adminhtml_Page_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _construct()
    {
        parent::_construct();

        $this->setId('training_cms_page_list');
        $this->setDefaultSort('id');
    }

    protected function _prepareCollection()
    {
        /** @var Training_Cms_Model_Resource_Page_Collection $collection */
        $collection = Mage::getResourceModel('training_cms/page_collection');
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

       $this->addColumn(
           'page_id',
           array(
               'header' => $this->__('Page Id'),
               'width' => '50px',
               'index' => 'page_id',
               'filter' => false,
               'sortable' => true,

           )
       );
       $this->addColumn(
           'category_id',
           array(
               'header' => $this->__('Category Id'),
               'width' => '50px',
               'index' => 'category_id',
               'filter' => false,
               'sortable' => false,
           )
       );
       $this->addColumn(
           'code',
           array(
               'header' => $this->__('Code'),
               'width' => '50px',
               'index' => 'code',
               'filter' => false,
               'sortable' => true,
           )
       );
       $this->addColumn(
           'title',
           array(
               'header' => $this->__('Title'),
               'width' => '50px',
               'index' => 'title',
               'filter' => false,
               'sortable' => true,
           )
       );
       $this->addColumn(
           'url',
           array(
               'header' => $this->__('Url'),
               'width' => '50px',
               'index' => 'url',
               'filter' => false,
               'sortable' => true,
           )
       );
       $this->addColumn(
           'description',
           array(
               'header' => $this->__('Description'),
               'width' => '50px',
               'index' => 'description',
               'filter' => false,
               'sortable' => true,
           )
       );
       $this->addColumn(
           'short_description',
           array(
               'header' => $this->__('Short Description'),
               'width' => '50px',
               'index' => 'short_description',
               'filter' => false,
               'sortable' => true,
           )
       );
       $this->addColumn(
           'created_at',
           array(
               'header' => $this->__('Created At'),
               'width' => '50px',
               'index' => 'created_at',
               'filter' => false,
               'sortable' => true,
           )
       );
       $this->addColumn(
           'updated_at',
           array(
               'header' => $this->__('Updated At'),
               'width' => '50px',
               'index' => 'updated_at',
               'filter' => false,
               'sortable' => true,
           )
       );


        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

    protected function _prepareMassaction()
    {
        $modelPk = Mage::getModel('training_cms/page')->getResource()->getIdFieldName();
        $this->setMassactionIdField($modelPk);
        $this->getMassactionBlock()->setFormFieldName('ids');
        // $this->getMassactionBlock()->setUseSelectAll(false);
        $this->getMassactionBlock()->addItem(
            'delete',
            array(
                'label'=> $this->__('Delete'),
                'url'  => $this->getUrl('*/*/massDelete'),
            )
        );
        return $this;
    }
}