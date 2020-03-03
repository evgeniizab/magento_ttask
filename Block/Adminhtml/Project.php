<?php
namespace Ez\Ttask\Block\Adminhtml;

class Project extends \Magento\Backend\Block\Widget\Grid\Container
{
	/**
	 * constructor
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_controller = 'adminhtml_project';
		$this->_blockGroup = 'Ez_Ttask';
		$this->_headerText = __('Project');
		$this->_addButtonLabel = __('Create New Project');
		parent::_construct();
	}
}
