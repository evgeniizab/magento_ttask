<?php
namespace Ez\Ttask\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'ez_ttask_tasks_collection';
	protected $_eventObject = 'tasks_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Ez\Ttask\Model\Post', 'Ez\Ttask\Model\ResourceModel\Post');
	}


}
