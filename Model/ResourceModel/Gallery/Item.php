<?php
namespace WSite\Gallery\Model\ResourceModel\Gallery;

class Item extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('wsite_gallery_item', 'entity_id');
    }
}
