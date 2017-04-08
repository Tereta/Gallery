<?php
namespace WSite\Gallery\Model\ResourceModel;

class Gallery extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('wsite_gallery', 'entity_id');
    }
}
