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
 * RestaurantMenuController
 */
class RestaurantMenuController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * restaurantMenuRepository
     * 
     * @var \Hulk\Hofexpress\Domain\Repository\RestaurantMenuRepository
     */
    protected $restaurantMenuRepository = null;

    /**
     * @param \Hulk\Hofexpress\Domain\Repository\RestaurantMenuRepository $restaurantMenuRepository
     */
    public function injectRestaurantMenuRepository(\Hulk\Hofexpress\Domain\Repository\RestaurantMenuRepository $restaurantMenuRepository)
    {
        $this->restaurantMenuRepository = $restaurantMenuRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $restaurantMenus = $this->restaurantMenuRepository->findAll();
        $this->view->assign('restaurantMenus', $restaurantMenus);
    }

    /**
     * action show
     * 
     * @param \Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu
     * @return void
     */
    public function showAction(\Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->view->assign('restaurantMenu', $restaurantMenu);
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
     * @param \Hulk\Hofexpress\Domain\Model\RestaurantMenu $newRestaurantMenu
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\RestaurantMenu $newRestaurantMenu)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantMenuRepository->add($newRestaurantMenu);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu
     * @ignorevalidation $restaurantMenu
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->view->assign('restaurantMenu', $restaurantMenu);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantMenuRepository->update($restaurantMenu);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu
     * @return void
     */
    public function deleteAction(\Hulk\Hofexpress\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantMenuRepository->remove($restaurantMenu);
        $this->redirect('list');
    }
}
