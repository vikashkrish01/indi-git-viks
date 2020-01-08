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
 * Customer
 */
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * userId
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $userId = 0;

    /**
     * phoneNumber
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $phoneNumber = 0;

    /**
     * address
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\HofexpressApp\Domain\Model\Address>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $address = null;

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
        $this->address = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the userId
     * 
     * @return int userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets the userId
     * 
     * @param int $userId
     * @return void
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Returns the phoneNumber
     * 
     * @return int phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets the phoneNumber
     * 
     * @param int $phoneNumber
     * @return void
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Adds a Address
     * 
     * @param \Hulk\HofexpressApp\Domain\Model\Address $addres
     * @return void
     */
    public function addAddres(\Hulk\HofexpressApp\Domain\Model\Address $addres)
    {
        $this->address->attach($addres);
    }

    /**
     * Removes a Address
     * 
     * @param \Hulk\HofexpressApp\Domain\Model\Address $addresToRemove The Address to be removed
     * @return void
     */
    public function removeAddres(\Hulk\HofexpressApp\Domain\Model\Address $addresToRemove)
    {
        $this->address->detach($addresToRemove);
    }

    /**
     * Returns the address
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\HofexpressApp\Domain\Model\Address> address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hulk\HofexpressApp\Domain\Model\Address> $address
     * @return void
     */
    public function setAddress(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $address)
    {
        $this->address = $address;
    }
}
