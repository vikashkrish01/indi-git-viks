<?php
namespace Hulk\HofexpressApp\Controller;


use Hulk\HofexpressApp\Domain\Model\RestaurantMenu;

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
 * RestaurantController
 */
class RestaurantController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * restaurantRepository
     * 
     * @var \Hulk\HofexpressApp\Domain\Repository\RestaurantRepository
     */
    protected $restaurantRepository = null;

    /**
     * action list
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Restaurant
     * @return void
     */
    public function listAction()
    {
        $restaurants = $this->restaurantRepository->findAll();
        $this->view->assign('restaurants', $restaurants);
    }

    /**
     * action show
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Restaurant
     * @return void
     */
    public function showAction(\Hulk\HofexpressApp\Domain\Model\Restaurant $restaurant)
    {
        $this->view->assign('restaurant', $restaurant);
        $this->view->assign('restaurantMenu', $restaurant->getMenu());
    }

    /**
     * action new
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Restaurant
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Restaurant
     * @return void
     */
    public function createAction(\Hulk\HofexpressApp\Domain\Model\Restaurant $newRestaurant)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantRepository->add($newRestaurant);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Restaurant
     * @ignorevalidation $restaurant
     * @return void
     */
    public function editAction(\Hulk\HofexpressApp\Domain\Model\Restaurant $restaurant)
    {
        $this->view->assign('restaurant', $restaurant);
    }

    /**
     * action update
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Restaurant
     * @return void
     */
    public function updateAction(\Hulk\HofexpressApp\Domain\Model\Restaurant $restaurant)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantRepository->update($restaurant);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Restaurant
     * @return void
     */
    public function deleteAction(\Hulk\HofexpressApp\Domain\Model\Restaurant $restaurant)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantRepository->remove($restaurant);
        $this->redirect('list');
    }

    /**
     * @param \Hulk\HofexpressApp\Domain\Repository\RestaurantRepository $RestaurantRepository
     */
    public function injectRestaurantRepository(\Hulk\HofexpressApp\Domain\Repository\RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }
}
