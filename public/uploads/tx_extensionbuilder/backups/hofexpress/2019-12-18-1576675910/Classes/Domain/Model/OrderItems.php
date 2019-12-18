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
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $orderId = 0;

    /**
     * food
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $food = '';

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

    /**
     * Returns the food
     * 
     * @return string food
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Sets the food
     * 
     * @param string $food
     * @return void
     */
    public function setFood($food)
    {
        $this->food = $food;
    }
}
