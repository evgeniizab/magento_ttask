<?php

/**
 * Tasks.php
 *
 * @copyright Copyright © 2020 Ez. All rights reserved.
 * @author    evgenii@zabairachnyi.com
 */

namespace Ez\Ttask\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Tasks extends AbstractModel implements IdentityInterface
{
    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'ez_ttask_tasks';

    /**
     * @var string
     */
    protected $_cacheTag = 'ez_ttask_tasks';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'ez_ttask_tasks';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Ez\Ttask\Model\ResourceModel\Tasks');
    }

    /**
     * Get identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Save from collection data
     *
     * @param array $data
     * @return $this|bool
     */
    public function saveCollection(array $data)
    {
        if (isset($data[$this->getId()])) {
            $this->addData($data[$this->getId()]);
            $this->getResource()->save($this);
        }
        return $this;
    }
}
