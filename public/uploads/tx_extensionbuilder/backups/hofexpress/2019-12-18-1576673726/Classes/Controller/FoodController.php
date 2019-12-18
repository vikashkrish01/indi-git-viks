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
 * FoodController
 */
class FoodController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $foods = $this->foodRepository->findAll();
        $this->view->assign('foods', $foods);
    }

    /**
     * action show
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Food $food
     * @return void
     */
    public function showAction(\Hulk\Hofexpress\Domain\Model\Food $food)
    {
        $this->view->assign('food', $food);
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
     * @param \Hulk\Hofexpress\Domain\Model\Food $newFood
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\Food $newFood)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodRepository->add($newFood);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Food $food
     * @ignorevalidation $food
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\Food $food)
    {
        $this->view->assign('food', $food);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Food $food
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\Food $food)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodRepository->update($food);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Food $food
     * @return void
     */
    public function deleteAction(\Hulk\Hofexpress\Domain\Model\Food $food)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodRepository->remove($food);
        $this->redirect('list');
    }
}
