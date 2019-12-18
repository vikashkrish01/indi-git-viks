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
 * Restaurant
 */
class Restaurant extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * restaurantId
     * 
     * @var int
     */
    protected $restaurantId = 0;

    /**
     * restaurantName
     * 
     * @var string
     */
    protected $restaurantName = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * logo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $logo = null;

    /**
     * address
     * 
     * @var string
     */
    protected $address = '';

    /**
     * restaurantType
     * 
     * @var string
     */
    protected $restaurantType = '';

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
     * Returns the restaurantName
     * 
     * @return string $restaurantName
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * Sets the restaurantName
     * 
     * @param string $restaurantName
     * @return void
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;
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
     * Returns the logo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the logo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }

    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the restaurantType
     * 
     * @return string $restaurantType
     */
    public function getRestaurantType()
    {
        return $this->restaurantType;
    }

    /**
     * Sets the restaurantType
     * 
     * @param string $restaurantType
     * @return void
     */
    public function setRestaurantType($restaurantType)
    {
        $this->restaurantType = $restaurantType;
    }
}
