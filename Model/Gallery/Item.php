<?php
namespace WSite\Gallery\Model\Gallery;

class Item extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('WSite\Gallery\Model\ResourceModel\Gallery\Item');
    }
}