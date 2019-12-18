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
}
