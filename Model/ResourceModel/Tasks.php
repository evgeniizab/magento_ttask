<?php

/**
 * Tasks.php
 *
 * @copyright Copyright © 2020 Ez. All rights reserved.
 * @author    evgenii@zabairachnyi.com
 */
namespace Ez\Ttask\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Tasks extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ez_ttask_tasks', 'entity_id');
    }
}
