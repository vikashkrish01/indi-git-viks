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
     * orderItems
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\Hofexpress\Domain\Model\OrderItems>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $orderItems = null;

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

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->orderItems = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a OrderItems
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderItems $orderItem
     * @return void
     */
    public function addOrderItem(\Hulk\Hofexpress\Domain\Model\OrderItems $orderItem)
    {
        $this->orderItems->attach($orderItem);
    }

    /**
     * Removes a OrderItems
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderItems $orderItemToRemove The OrderItems to be removed
     * @return void
     */
    public function removeOrderItem(\Hulk\Hofexpress\Domain\Model\OrderItems $orderItemToRemove)
    {
        $this->orderItems->detach($orderItemToRemove);
    }

    /**
     * Returns the orderItems
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\Hofexpress\Domain\Model\OrderItems> $orderItems
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * Sets the orderItems
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\Hofexpress\Domain\Model\OrderItems> $orderItems
     * @return void
     */
    public function setOrderItems(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $orderItems)
    {
        $this->orderItems = $orderItems;
    }
}
