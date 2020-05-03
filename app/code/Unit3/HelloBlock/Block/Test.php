<?php
/**
*
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Unit3\HelloBlock\Block;
/**
* Class Test
* @package Unit3\HelloBlock\Block
*/
class Test extends \Magento\Framework\View\Element\Template
{ 

    public function getText() 
    {
         
        return $this->_data['block_text'];
    }
} 