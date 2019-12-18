<?php
namespace Hulk\Hofexpress\Domain\Model;


/***
 *
 * This file is part of the "HofExpress" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * userId
     * 
     * @var int
     */
    protected $userId = 0;

    /**
     * totalAmount
     * 
     * @var int
     */
    protected $totalAmount = 0;

    /**
     * status
     * 
     * @var string
     */
    protected $status = '';

    /**
     * orderStatus
     * 
     * @var \Hulk\Hofexpress\Domain\Model\OrderStatus
     */
    protected $orderStatus = null;

    /**
     * delivery
     * 
     * @var \Hulk\Hofexpress\Domain\Model\DeliveryType
     */
    protected $delivery = null;

    /**
     * customer
     * 
     * @var \Hulk\Hofexpress\Domain\Model\Customer
     */
    protected $customer = null;

    /**
     * Returns the userId
     * 
     * @return int $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets the userId
     * 
     * @param int $userId
     * @return void
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Returns the totalAmount
     * 
     * @return int $totalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets the totalAmount
     * 
     * @param int $totalAmount
     * @return void
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns the status
     * 
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     * 
     * @param string $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Returns the orderStatus
     * 
     * @return \Hulk\Hofexpress\Domain\Model\OrderStatus orderStatus
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Sets the orderStatus
     * 
     * @param string $orderStatus
     * @return void
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * Returns the delivery
     * 
     * @return \Hulk\Hofexpress\Domain\Model\DeliveryType $delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets the delivery
     * 
     * @param \Hulk\Hofexpress\Domain\Model\DeliveryType $delivery
     * @return void
     */
    public function setDelivery(\Hulk\Hofexpress\Domain\Model\DeliveryType $delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * Returns the customer
     * 
     * @return \Hulk\Hofexpress\Domain\Model\Customer $customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets the customer
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Customer $customer
     * @return void
     */
    public function setCustomer(\Hulk\Hofexpress\Domain\Model\Customer $customer)
    {
        $this->customer = $customer;
    }
}
