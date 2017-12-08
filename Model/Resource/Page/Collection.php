<?php

class Training_Cms_Model_Resource_Page_Collection extends Varien_Data_Collection
{

    public function __construct()
    {
        $this->setItemObjectClass('training_cms/page');
        parent::__construct();
    }

}