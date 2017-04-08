<?php
namespace WSite\Gallery\Block;

class Gallery extends \Magento\Framework\View\Element\Template
{
    public function _construct() {
        $this->setTemplate('WSite_Gallery::gallery.phtml');
        
        return parent::_construct();
    }
    
    public function getTitle() {
        return '...Title...';
    }
    
    public function getDescription() {
        return '...Description...';
    }
    
    public function getItems() {
        return [];
    }
}