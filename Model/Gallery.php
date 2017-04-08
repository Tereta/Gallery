<?php
namespace WSite\Gallery\Model;

class Gallery extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('WSite\Gallery\Model\ResourceModel\Gallery');
    }
}