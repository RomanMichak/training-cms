<?php
/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();


/**
 * Altering table training_cms_page with adding category_id field
 */
$installer->run("
	ALTER TABLE {$installer->getTable('training_cms/page')} 
	  ADD `category_id` INT(11) UNSIGNED NOT NULL DEFAULT 0 AFTER `page_id`; 
	");
$installer->endSetup();