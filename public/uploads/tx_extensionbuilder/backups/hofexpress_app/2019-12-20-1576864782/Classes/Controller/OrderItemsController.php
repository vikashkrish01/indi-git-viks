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
 * OrderItemsController
 */
class OrderItemsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * orderItemsRepository
     * 
     * @var \Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository
     */
    protected $orderItemsRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $orderItems = $this->orderItemsRepository->findAll();
        $this->view->assign('orderItems', $orderItems);
    }

    /**
     * action show
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderItems $orderItems
     * @return void
     */
    public function showAction(\Hulk\Hofexpress\Domain\Model\OrderItems $orderItems)
    {
        $this->view->assign('orderItems', $orderItems);
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
     * @param \Hulk\Hofexpress\Domain\Model\OrderItems $newOrderItems
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\OrderItems $newOrderItems)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderItemsRepository->add($newOrderItems);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderItems $orderItems
     * @ignorevalidation $orderItems
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\OrderItems $orderItems)
    {
        $this->view->assign('orderItems', $orderItems);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderItems $orderItems
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\OrderItems $orderItems)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderItemsRepository->update($orderItems);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Hulk\Hofexpress\Domain\Model\OrderItems $orderItems
     * @return void
     */
    public function deleteAction(\Hulk\Hofexpress\Domain\Model\OrderItems $orderItems)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderItemsRepository->remove($orderItems);
        $this->redirect('list');
    }

    /**
     * @param \Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository $orderItemsRepository
     */
    public function injectOrderItemsRepository(\Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository $orderItemsRepository)
    {
        $this->orderItemsRepository = $orderItemsRepository;
    }
}
