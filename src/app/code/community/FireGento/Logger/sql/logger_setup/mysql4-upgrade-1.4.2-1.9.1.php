<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$installer->run("
    DROP TABLE IF EXISTS `advanced_logger`;
");

$installer->endSetup();
