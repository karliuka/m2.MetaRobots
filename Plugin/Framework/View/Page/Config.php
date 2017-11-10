<?php
/**
 * Copyright © 2011-2017 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\MetaRobots\Plugin\Framework\View\Page;

use Magento\Framework\View\Page\Config as Subject;
use Faonni\MetaRobots\Helper\Data as MetaRobotsHelper;

/**
 * Page View Config Plugin
 */
class Config
{
    /**
     * MetaRobots Helper
     *
     * @var Faonni\MetaRobots\Helper\Data
     */
    protected $_helper;
    
    /**
     * Initialize Plugin
     * 
     * @param MetaRobotsHelper $helper
     */
    public function __construct(		
		MetaRobotsHelper $helper
	) {
        $this->_helper = $helper;
    }
    
    /**
     * Retrieve Meta Robots Tag
     * 
     * @param Subject $subject	 
     * @param string $result
     * @return string
     */
    public function afterGetRobots(Subject $subject, $result)
    {
        return $this->_helper->isForceDenyIndexing()
			? 'NOINDEX,NOFOLLOW'
			: $result;
    }
}
