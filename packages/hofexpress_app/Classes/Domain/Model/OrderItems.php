<?php
namespace Hulk\HofexpressApp\Domain\Model;


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
     * quantity
     * 
     * @var int
     */
    protected $quantity = 0;

    /**
     * food
     * 
     * @var \Hulk\HofexpressApp\Domain\Model\Food
     */
    protected $food = null;

    /**
     * order
     * 
     * @var \Hulk\HofexpressApp\Domain\Model\Order
     */
    protected $order = null;

    /**
     * Returns the quantity
     * 
     * @return int quantity
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
     * @return \Hulk\HofexpressApp\Domain\Model\Food food
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Sets the food
     * 
     * @param \Hulk\HofexpressApp\Domain\Model\Food $food
     * @return void
     */
    public function setFood(\Hulk\HofexpressApp\Domain\Model\Food $food)
    {
        $this->food = $food;
    }

    /**
     * Returns the order
     * 
     * @return \Hulk\HofexpressApp\Domain\Model\Order $order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets the order
     * 
     * @param \Hulk\HofexpressApp\Domain\Model\Order $order
     * @return void
     */
    public function setOrder(\Hulk\HofexpressApp\Domain\Model\Order $order)
    {
        $this->order = $order;
    }
}
