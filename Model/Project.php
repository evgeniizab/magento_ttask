<?php
namespace Ez\Ttask\Model;
class project extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'ez_ttask_project';

	protected $_cacheTag = 'ez_ttask_project';

	protected $_eventPrefix = 'ez_ttask_project';

	protected function _construct()
	{
		$this->_init('Ez\Ttask\Model\ResourceModel\Project');
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
