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
 * DeliveryType
 */
class DeliveryType extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * homeOrTakeType
     * 
     * @var string
     */
    protected $homeOrTakeType = '';

    /**
     * Returns the homeOrTakeType
     * 
     * @return string $homeOrTakeType
     */
    public function getHomeOrTakeType()
    {
        return $this->homeOrTakeType;
    }

    /**
     * Sets the homeOrTakeType
     * 
     * @param string $homeOrTakeType
     * @return void
     */
    public function setHomeOrTakeType($homeOrTakeType)
    {
        $this->homeOrTakeType = $homeOrTakeType;
    }
}
