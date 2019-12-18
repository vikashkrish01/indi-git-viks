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
 * FoodType
 */
class FoodType extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * food
     * 
     * @var \Hulk\Hofexpress\Domain\Model\Food
     */
    protected $food = null;

    /**
     * Returns the food
     * 
     * @return \Hulk\Hofexpress\Domain\Model\Food $food
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Sets the food
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Food $food
     * @return void
     */
    public function setFood(\Hulk\Hofexpress\Domain\Model\Food $food)
    {
        $this->food = $food;
    }
}
