<?php
namespace Ez\Ttask\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'ez_ttask_tasks';

	protected $_cacheTag = 'ez_ttask_tasks';

	protected $_eventPrefix = 'ez_ttask_tasks';

	protected function _construct()
	{
		$this->_init('Ez\Ttask\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
