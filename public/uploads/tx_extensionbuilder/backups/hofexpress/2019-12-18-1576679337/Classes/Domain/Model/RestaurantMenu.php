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
 * RestaurantMenu
 */
class RestaurantMenu extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * restaurant
     * 
     * @var \Hulk\Hofexpress\Domain\Model\Restaurant
     */
    protected $restaurant = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the restaurant
     * 
     * @return \Hulk\Hofexpress\Domain\Model\Restaurant $restaurant
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * Sets the restaurant
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Restaurant $restaurant
     * @return void
     */
    public function setRestaurant(\Hulk\Hofexpress\Domain\Model\Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }
}
