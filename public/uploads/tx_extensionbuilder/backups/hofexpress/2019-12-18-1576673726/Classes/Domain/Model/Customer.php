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
 * Customer
 */
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * userId
     * 
     * @var int
     */
    protected $userId = 0;

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * address
     * 
     * @var string
     */
    protected $address = '';

    /**
     * phoneNumber
     * 
     * @var int
     */
    protected $phoneNumber = 0;

    /**
     * emailId
     * 
     * @var string
     */
    protected $emailId = '';

    /**
     * Returns the userId
     * 
     * @return int $userId
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
     * Returns the phoneNumber
     * 
     * @return int $phoneNumber
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
     * Returns the emailId
     * 
     * @return string $emailId
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Sets the emailId
     * 
     * @param string $emailId
     * @return void
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
    }
}
