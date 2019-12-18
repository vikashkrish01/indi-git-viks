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
 * FoodTypeController
 */
class FoodTypeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $foodTypes = $this->foodTypeRepository->findAll();
        $this->view->assign('foodTypes', $foodTypes);
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
     * @param \Hulk\Hofexpress\Domain\Model\FoodType $newFoodType
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\FoodType $newFoodType)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodTypeRepository->add($newFoodType);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\FoodType $foodType
     * @ignorevalidation $foodType
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\FoodType $foodType)
    {
        $this->view->assign('foodType', $foodType);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\FoodType $foodType
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\FoodType $foodType)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodTypeRepository->update($foodType);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Hulk\Hofexpress\Domain\Model\FoodType $foodType
     * @return void
     */
    public function deleteAction(\Hulk\Hofexpress\Domain\Model\FoodType $foodType)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->foodTypeRepository->remove($foodType);
        $this->redirect('list');
    }
}
