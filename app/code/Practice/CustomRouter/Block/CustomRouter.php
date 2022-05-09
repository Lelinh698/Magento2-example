<?php

namespace Practice\CustomRouter\Block;

use Magento\Framework\View\Element\Template;

class CustomRouter extends Template
{
    public function getInfo()
    {
        return "This is my custom router page.";
    }
}
