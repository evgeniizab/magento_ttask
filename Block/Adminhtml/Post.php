<?php
namespace Ez\Ttask\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{
	/**
	 * constructor
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Ez_Ttask';
		$this->_headerText = __('Tasks');
		$this->_addButtonLabel = __('Create New Task');
		parent::_construct();
	}
}
