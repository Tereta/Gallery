<?php
/**
 * ╔╗╔╗╔╦══╦══╦══╦════╦═══╗╔══╦═══╦═══╗
 * ║║║║║╠═╗║╔═╩╗╔╩═╗╔═╣╔══╝║╔╗║╔═╗║╔══╝
 * ║║║║║╠═╝║╚═╗║║──║║─║╚══╗║║║║╚═╝║║╔═╗
 * ║║║║║╠═╗╠═╗║║║──║║─║╔══╝║║║║╔╗╔╣║╚╗║
 * ║╚╝╚╝╠═╝╠═╝╠╝╚╗─║║─║╚══╦╣╚╝║║║║║╚═╝║
 * ╚═╝╚═╩══╩══╩══╝─╚╝─╚═══╩╩══╩╝╚╝╚═══╝
 * 
 * Examples and documentation at the: http://w3site.org
 * 
 * @copyright   Copyright (c) 2015-2016 Tereta Alexander. (http://www.w3site.org)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace WSite\Gallery\Block;

class Gallery extends \Magento\Framework\View\Element\Template
{
    protected $_galleryModelFactory;
    protected $_galleryModel;
    
    public function __construct(
        \WSite\Gallery\Model\GalleryFactory $galleryModelFactory,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = array()
    ) {
        $this->_galleryModelFactory = $galleryModelFactory;
        
        parent::__construct($context, $data);
    }
    
    public function _construct()
    {
        $this->setTemplate('WSite_Gallery::gallery.phtml');
        
        return parent::_construct();
    }
    
    public function getModel()
    {
        if ($this->_galleryModel) {
            return $this->_galleryModel;
        }
        
        $id = $this->getId();
        $identifier = $this->getIdentifier();
        
        $galleryModel = $this->_galleryModelFactory->create();
        
        if ($id) {
            $galleryModel->load($id);
        }
        
        if ($identifier) {
            $galleryModel->load($identifier, 'identifier');
        }
        
        $this->_galleryModel = $galleryModel;
        
        return $this->_galleryModel;
    }
    
    public function getTitle()
    {
        return $this->getModel()->getTitle();
    }
    
    public function getDescription()
    {
        return $this->getModel()->getDescription();
    }
    
    public function getItems()
    {
        return $this->getModel()->getItems();
    }
}