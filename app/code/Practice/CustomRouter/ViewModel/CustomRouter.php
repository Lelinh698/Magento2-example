<?php

namespace Practice\CustomRouter\ViewModel;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class CustomRouter implements ArgumentInterface
{
    /**
     * @var Session
     */
    private $customerSession;

    public function __construct(
        Session $customerSession
    )
    {
        $this->customerSession = $customerSession;
    }

    public function getCustomerName()
    {
        $customerName = 'Anonymous User';
        if ($this->customerSession->isLoggedIn()) {
            $customerName = $this->customerSession->getCustomer()->getName();
        }
        return $customerName;
    }
}
