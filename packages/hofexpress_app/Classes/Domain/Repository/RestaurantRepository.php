<?php
namespace Hulk\HofexpressApp\Domain\Repository;


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
 * The repository for Restaurants
 */
class RestaurantRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @param string $search
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface\restaurants[]
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findBySearch(string $search){
        $query= $this->createQuery();

         $constraints= [];
         $constraints[]= $query->like('name', '%' . $search . '%');
         $constraints[]=$query->like('restaurantType', '%' . $search . '%');
        $query->matching(
            $query->logicalOr($constraints)
        );
        return $query->execute();
    }
}
