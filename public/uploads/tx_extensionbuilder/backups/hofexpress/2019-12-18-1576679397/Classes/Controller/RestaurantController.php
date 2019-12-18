<?php
namespace Hulk\Hofexpress\Controller;


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
     * @var \Hulk\Hofexpress\Domain\Repository\RestaurantRepository
     */
    protected $restaurantRepository = null;

    /**
     * @param \Hulk\Hofexpress\Domain\Repository\RestaurantRepository $restaurantRepository
     */
    public function injectRestaurantRepository(\Hulk\Hofexpress\Domain\Repository\RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    /**
     * action list
     * 
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
     * @param \Hulk\Hofexpress\Domain\Model\Restaurant $restaurant
     * @return void
     */
    public function showAction(\Hulk\Hofexpress\Domain\Model\Restaurant $restaurant)
    {
        $this->view->assign('restaurant', $restaurant);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Restaurant $newRestaurant
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\Restaurant $newRestaurant)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantRepository->add($newRestaurant);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Restaurant $restaurant
     * @ignorevalidation $restaurant
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\Restaurant $restaurant)
    {
        $this->view->assign('restaurant', $restaurant);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Restaurant $restaurant
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\Restaurant $restaurant)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantRepository->update($restaurant);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Restaurant $restaurant
     * @return void
     */
    public function deleteAction(\Hulk\Hofexpress\Domain\Model\Restaurant $restaurant)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantRepository->remove($restaurant);
        $this->redirect('list');
    }
}
