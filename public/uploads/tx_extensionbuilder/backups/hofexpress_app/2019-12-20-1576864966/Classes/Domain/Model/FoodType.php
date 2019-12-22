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
 * FoodType
 */
class FoodType extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * selectFoodType
     * 
     * @var string
     */
    protected $selectFoodType = '';

    /**
     * Returns the selectFoodType
     * 
     * @return string $selectFoodType
     */
    public function getSelectFoodType()
    {
        return $this->selectFoodType;
    }

    /**
     * Sets the selectFoodType
     * 
     * @param string $selectFoodType
     * @return void
     */
    public function setSelectFoodType($selectFoodType)
    {
        $this->selectFoodType = $selectFoodType;
    }
}
