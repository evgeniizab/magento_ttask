<?php
/**
 * Collection.php
 *
 * @copyright Copyright © 2020 Ez. All rights reserved.
 * @author    evgenii@zabairachnyi.com
 */
namespace Ez\Ttask\Model\ResourceModel\Project;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Pcollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';

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
