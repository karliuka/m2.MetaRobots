<?php
/**
 * Copyright © 2011-2017 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\MetaRobots\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

/**
 * Helper Data
 */
class Data extends AbstractHelper 
{
    /**
     * Force Deny Indexing Config Path
     */	
    const XML_CONFIG_FORCE_DENY_INDEXING = 'design/search_engine_robots/force_deny_indexing';
    	
    /**
     * Checks Force Deny Indexing Functionality Should be Enabled
     *    
     * @return bool
     */
    public function isForceDenyIndexing()
	{
		return $this->_getConfig(self::XML_CONFIG_FORCE_DENY_INDEXING);
    }
    
    /**
     * Retrieve Store Configuration Data
     *
     * @param string $path
     * @param int|Store $store     
     * @return string|null
     */
    protected function _getConfig($path, $store = null)
    {
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE, $store);
    }         	    
}
