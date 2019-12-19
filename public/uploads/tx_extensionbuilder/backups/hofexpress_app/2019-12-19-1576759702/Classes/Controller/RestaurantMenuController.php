<?php
namespace Hulk\HofexpressApp\Controller;


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
     * @var \Hulk\HofexpressApp\Domain\Repository\RestaurantMenuRepository
     */
    protected $restaurantMenuRepository = null;

    /**
     * action list
     * 
     * @param Hulk\HofexpressApp\Domain\Model\RestaurantMenu
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
     * @param Hulk\HofexpressApp\Domain\Model\RestaurantMenu
     * @return void
     */
    public function showAction(\Hulk\HofexpressApp\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->view->assign('restaurantMenu', $restaurantMenu);
    }

    /**
     * action new
     * 
     * @param Hulk\HofexpressApp\Domain\Model\RestaurantMenu
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param Hulk\HofexpressApp\Domain\Model\RestaurantMenu
     * @return void
     */
    public function createAction(\Hulk\HofexpressApp\Domain\Model\RestaurantMenu $newRestaurantMenu)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantMenuRepository->add($newRestaurantMenu);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param Hulk\HofexpressApp\Domain\Model\RestaurantMenu
     * @ignorevalidation $restaurantMenu
     * @return void
     */
    public function editAction(\Hulk\HofexpressApp\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->view->assign('restaurantMenu', $restaurantMenu);
    }

    /**
     * action update
     * 
     * @param Hulk\HofexpressApp\Domain\Model\RestaurantMenu
     * @return void
     */
    public function updateAction(\Hulk\HofexpressApp\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantMenuRepository->update($restaurantMenu);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param Hulk\HofexpressApp\Domain\Model\RestaurantMenu
     * @return void
     */
    public function deleteAction(\Hulk\HofexpressApp\Domain\Model\RestaurantMenu $restaurantMenu)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->restaurantMenuRepository->remove($restaurantMenu);
        $this->redirect('list');
    }

    /**
     * @param \Hulk\HofexpressApp\Domain\Repository\RestaurantMenuRepository $RestaurantMenuRepository
     */
    public function injectRestaurantMenuRepository(\Hulk\HofexpressApp\Domain\Repository\RestaurantMenuRepository $restaurantMenuRepository)
    {
        $this->restaurantMenuRepository = $restaurantMenuRepository;
    }
}
