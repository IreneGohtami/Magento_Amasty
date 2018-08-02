<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2015 Amasty (http://www.amasty.com)
 * @package Amasty_HelloWorld
 */
namespace Amasty\HelloWorld\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterfac
     */
    protected $_scopeConfig;

    CONST ENABLE      = 'amasty_helloworld/general/enable';
	CONST IMAGE 	  = 'amasty_helloworld/general/image';
    CONST TEXT_ALIGN  = 'amasty_helloworld/general/text_align';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);

        $this->_scopeConfig = $scopeConfig;
    }

    public function getEnable(){
        return $this->_scopeConfig->getValue(self::ENABLE);
    }
	
	public function getImage(){
        return $this->_scopeConfig->getValue(self::IMAGE);
    }

    public function getTextAlign(){
        return $this->_scopeConfig->getValue(self::TEXT_ALIGN);
    }
}

