<?php
namespace Ez\Ttask\Model\ResourceModel;


class Project extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}

	protected function _construct()
	{
		$this->_init('ez_ttask_project', 'id');
	}





}
