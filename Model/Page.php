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

    /**
     * Loading page by code
     *
     * @param $code
     * @return Mage_Core_Model_Abstract
     */
    public function loadByCode($code)
    {
        return $this->load($code, 'code');
    }


}