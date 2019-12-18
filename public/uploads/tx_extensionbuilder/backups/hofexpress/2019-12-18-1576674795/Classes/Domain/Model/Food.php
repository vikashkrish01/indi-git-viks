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
 * Food
 */
class Food extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * foodName
     * 
     * @var string
     */
    protected $foodName = '';

    /**
     * restaurantId
     * 
     * @var int
     */
    protected $restaurantId = 0;

    /**
     * price
     * 
     * @var int
     */
    protected $price = 0;

    /**
     * foodType
     * 
     * @var string
     */
    protected $foodType = '';

    /**
     * Returns the foodName
     * 
     * @return string $foodName
     */
    public function getFoodName()
    {
        return $this->foodName;
    }

    /**
     * Sets the foodName
     * 
     * @param string $foodName
     * @return void
     */
    public function setFoodName($foodName)
    {
        $this->foodName = $foodName;
    }

    /**
     * Returns the restaurantId
     * 
     * @return int $restaurantId
     */
    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    /**
     * Sets the restaurantId
     * 
     * @param int $restaurantId
     * @return void
     */
    public function setRestaurantId($restaurantId)
    {
        $this->restaurantId = $restaurantId;
    }

    /**
     * Returns the price
     * 
     * @return int $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param int $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the foodType
     * 
     * @return string $foodType
     */
    public function getFoodType()
    {
        return $this->foodType;
    }

    /**
     * Sets the foodType
     * 
     * @param string $foodType
     * @return void
     */
    public function setFoodType($foodType)
    {
        $this->foodType = $foodType;
    }
}
