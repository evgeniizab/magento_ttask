<?php
namespace Ez\Ttask\Setup;

use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class Uninstall implements UninstallInterface
{
	public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();

		$installer->getConnection()->dropTable($installer->getTable('ez_ttask_post'));
		$installer->getConnection()->dropTable($installer->getTable('ez_ttask_project'));

		$installer->endSetup();
	}
}
