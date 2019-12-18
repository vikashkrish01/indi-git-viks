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
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * foodmenu
     * 
     * @var \Hulk\Hofexpress\Domain\Model\RestaurantMenu
     */
    protected $foodmenu = null;

    /**
     * foodTypes
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\Hofexpress\Domain\Model\FoodType>
     */
    protected $foodTypes = null;

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
        $this->image = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->foodTypes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image->attach($image);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->image->detach($imageToRemove);
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the foodmenu
     * 
     * @return \Hulk\Hofexpress\Domain\Model\RestaurantMenu $foodmenu
     */
    public function getFoodmenu()
    {
        return $this->foodmenu;
    }

    /**
     * Sets the foodmenu
     * 
     * @param \Hulk\Hofexpress\Domain\Model\RestaurantMenu $foodmenu
     * @return void
     */
    public function setFoodmenu(\Hulk\Hofexpress\Domain\Model\RestaurantMenu $foodmenu)
    {
        $this->foodmenu = $foodmenu;
    }

    /**
     * Adds a FoodType
     * 
     * @param \Hulk\Hofexpress\Domain\Model\FoodType $foodType
     * @return void
     */
    public function addFoodType(\Hulk\Hofexpress\Domain\Model\FoodType $foodType)
    {
        $this->foodTypes->attach($foodType);
    }

    /**
     * Removes a FoodType
     * 
     * @param \Hulk\Hofexpress\Domain\Model\FoodType $foodTypeToRemove The FoodType to be removed
     * @return void
     */
    public function removeFoodType(\Hulk\Hofexpress\Domain\Model\FoodType $foodTypeToRemove)
    {
        $this->foodTypes->detach($foodTypeToRemove);
    }

    /**
     * Returns the foodTypes
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\Hofexpress\Domain\Model\FoodType> $foodTypes
     */
    public function getFoodTypes()
    {
        return $this->foodTypes;
    }

    /**
     * Sets the foodTypes
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\Hofexpress\Domain\Model\FoodType> $foodTypes
     * @return void
     */
    public function setFoodTypes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $foodTypes)
    {
        $this->foodTypes = $foodTypes;
    }
}
