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
 * FoodController
 */
class FoodController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * foodRepository
     * 
     * @var \Hulk\HofexpressApp\Domain\Repository\FoodRepository
     */
    protected $foodRepository = null;

    /**
     * action list
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Food
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
     * @param Hulk\HofexpressApp\Domain\Model\Food
     * @return void
     */
    public function showAction(\Hulk\HofexpressApp\Domain\Model\Food $food)
    {
        $this->view->assign('food', $food);
    }

    /**
     * action new
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Food
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Food
     * @return void
     */
    public function createAction(\Hulk\HofexpressApp\Domain\Model\Food $newFood)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodRepository->add($newFood);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Food
     * @ignorevalidation $food
     * @return void
     */
    public function editAction(\Hulk\HofexpressApp\Domain\Model\Food $food)
    {
        $this->view->assign('food', $food);
    }

    /**
     * action update
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Food
     * @return void
     */
    public function updateAction(\Hulk\HofexpressApp\Domain\Model\Food $food)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodRepository->update($food);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Food
     * @return void
     */
    public function deleteAction(\Hulk\HofexpressApp\Domain\Model\Food $food)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodRepository->remove($food);
        $this->redirect('list');
    }

    /**
     * @param \Hulk\HofexpressApp\Domain\Repository\FoodRepository $FoodRepository
     */
    public function injectFoodRepository(\Hulk\HofexpressApp\Domain\Repository\FoodRepository $foodRepository)
    {
        $this->foodRepository = $foodRepository;
    }
}
