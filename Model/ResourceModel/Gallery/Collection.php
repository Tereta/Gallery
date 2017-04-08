<?php

namespace WSite\Gallery\Model\ResourceModel\Gallery;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @return void;
     */
    protected function _construct()
    {
        $this->_init(
            'WSite\Gallery\Model\Gallery',
            'WSite\Gallery\Model\ResourceModel\Gallery'
        );
    }
}
