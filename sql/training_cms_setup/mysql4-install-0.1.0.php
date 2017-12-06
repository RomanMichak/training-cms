<?php
/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();


/**
 * Creating a table training_cms_page
 */
$installer->run("
	DROP TABLE IF EXISTS {$installer->getTable('training_cms/page')};
	CREATE TABLE {$installer->getTable('training_cms/page')} (
	  `page_id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  `code` VARCHAR(255) NOT NULL DEFAULT '',
	  `title` VARCHAR(255) NOT NULL DEFAULT '',
	  `url` TEXT NOT NULL DEFAULT '',
	  `short_description` TEXT NULL,
	  `description` TEXT NULL,
	  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
	  `updated_at` DATETIME ON UPDATE CURRENT_TIMESTAMP
	) Engine=InnoDB DEFAULT CHARACTER SET=utf8; 
	");
$installer->endSetup(); 
