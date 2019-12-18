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
     * orderId
     * 
     * @var int
     */
    protected $orderId = 0;

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
     * Returns the orderId
     * 
     * @return int $orderId
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets the orderId
     * 
     * @param int $orderId
     * @return void
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

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
}
