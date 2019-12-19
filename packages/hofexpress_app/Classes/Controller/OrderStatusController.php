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
 * OrderStatusController
 */
class OrderStatusController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $orderStatuses = $this->orderStatusRepository->findAll();
        $this->view->assign('orderStatuses', $orderStatuses);
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
     * @param \Hulk\Hofexpress\Domain\Model\OrderStatus $newOrderStatus
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\OrderStatus $newOrderStatus)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderStatusRepository->add($newOrderStatus);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderStatus $orderStatus
     * @ignorevalidation $orderStatus
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\OrderStatus $orderStatus)
    {
        $this->view->assign('orderStatus', $orderStatus);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderStatus $orderStatus
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\OrderStatus $orderStatus)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderStatusRepository->update($orderStatus);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderStatus $orderStatus
     * @return void
     */
    public function deleteAction(\Hulk\Hofexpress\Domain\Model\OrderStatus $orderStatus)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderStatusRepository->remove($orderStatus);
        $this->redirect('list');
    }
}
