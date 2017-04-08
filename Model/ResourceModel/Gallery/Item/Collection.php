<?php

namespace WSite\Gallery\Model\ResourceModel\Gallery\Item;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @return void;
     */
    protected function _construct()
    {
        $this->_init(
            'WSite\Gallery\Model\Gallery\Item',
            'WSite\Gallery\Model\ResourceModel\Gallery\Item'
        );
    }
}
