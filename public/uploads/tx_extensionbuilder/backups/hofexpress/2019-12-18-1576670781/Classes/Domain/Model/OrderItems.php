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
 * OrderItems
 */
class OrderItems extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * orderId
     * 
     * @var int
     */
    protected $orderId = 0;

    /**
     * foodItems
     * 
     * @var string
     */
    protected $foodItems = '';

    /**
     * quantity
     * 
     * @var int
     */
    protected $quantity = 0;

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
     * Returns the foodItems
     * 
     * @return string $foodItems
     */
    public function getFoodItems()
    {
        return $this->foodItems;
    }

    /**
     * Sets the foodItems
     * 
     * @param string $foodItems
     * @return void
     */
    public function setFoodItems($foodItems)
    {
        $this->foodItems = $foodItems;
    }

    /**
     * Returns the quantity
     * 
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     * 
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
