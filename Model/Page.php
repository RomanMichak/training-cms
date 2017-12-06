<?php

class Training_Cms_Model_Page extends Mage_Core_Model_Abstract
{

    /**
     * init model
     *
     */
    protected function _construct()
    {
        $this->_init('training_cms/page');
    }


    public function loadByCode($code)
    {
        return $this->load($code, 'code');
    }


}