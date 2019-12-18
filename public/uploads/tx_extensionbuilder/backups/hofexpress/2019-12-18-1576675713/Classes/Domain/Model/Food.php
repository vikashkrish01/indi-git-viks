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
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $foodName = '';

    /**
     * price
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $price = 0;

    /**
     * foodType
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $foodType = '';

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

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

    /**
     * Returns the price
     * 
     * @return float price
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
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
}
