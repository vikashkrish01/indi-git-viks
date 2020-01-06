<?php
namespace Hulk\HofexpressApp\Controller;

use Hulk\HofexpressApp\Domain\Model\Customer;
use Hulk\HofexpressApp\Domain\Model\Food;
use Hulk\HofexpressApp\Domain\Model\Order;
use Hulk\HofexpressApp\Domain\Model\OrderItems;
use Hulk\HofexpressApp\Domain\Repository\OrderRepository;
use OliverHader\SessionService\InvalidSessionException;
use OliverHader\SessionService\SubjectCollection;
use OliverHader\SessionService\SubjectResolver;

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
 * OrderController
 */
class OrderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * orderRepository
     * 
     * @var OrderRepository
     */
    protected $orderRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $orders = $this->orderRepository->findAll();
        $this->view->assign('orders', $orders);
    }

    /**
     * action show
     * 
     * @return void
     */
    public function showAction()
    {
        try {
            $customer = SubjectResolver::get()->forClassName(Customer::class)->forPropertyName('userId')->resolve();
        } catch (InvalidSessionException $exception) {
            $customer = null;
        }
        $order = $this->provideFoodList();
        $this->view->assign('customer', $customer);
        $this->view->assign('order', $order);
    }
    private function provideFoodList()
    {
        $collection = SubjectCollection::get('hofexpress_app/order');
        if (!isset($collection['order'])) {
            $collection['order'] = $this->objectManager->get(Order::class);
            $collection->persist();
        }
        return $collection['order'];
    }

    /**
     * action create
     * 
     * @param OrderItems $orderItems
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @return void
     */
    public function createAction(OrderItems $orderItems)
    {
        $order = $this->provideFoodList();
        $order->addOrderItems($orderItems->getFood());
        $order->orderRepository->update($order);
        $this->redirect('show');
    }

    /**
     * action edit
     * 
     * @ignorevalidation $order
     * @return void
     */
    public function editAction()
    {
        $order = $this->provideFoodList();
        $this->view->assign('order', $order);
    }

    /**
     * action update
     * 
     * @return void
     */
    public function updateAction()
    {
        $order = $this->provideFoodList();
        $this->orderRepository->update($order);
        $this->redirect('show');
    }

    /**
     * action delete
     * 
     * @return void
     */
    public function deleteAction()
    {
        $order = $this->provideFoodList();
        $this->orderRepository->remove($order);
        $this->redirect('show');
    }

    /**
     * @param OrderRepository $orderRepository
     */
    public function injectOrderRepository(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }
}
