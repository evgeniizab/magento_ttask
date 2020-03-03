<?php
namespace Ez\Ttask\Model\ResourceModel\Project;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'ez_ttask_project_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Ez\Ttask\Model\Project', 'Ez\Ttask\Model\ResourceModel\Project');
	}


}
