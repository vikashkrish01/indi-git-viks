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
        $orders = $this->orderRepository->findAll();
        $this->view->assign('orders', $orders);
    }

    /**
     * action show
     * @param Order $order
     * @return void
     */
    public function showAction(Order $order)
    {
        try {
            $customer = SubjectResolver::get()->forClassName(Customer::class)->forPropertyName('userId')->resolve();
        } catch (InvalidSessionException $exception) {
            $customer = null;
        }

        $order = $this->provideOrder();
        $this->view->assign('customer', $customer);
        $this->view->assign('order', $order);
    }

    public function showCurrentOrderAction()
    {
        $order = $this->provideOrder();
        $this->view->assign('order', $order);
    }

    /**
     * @param Food $food
     * @param int $quantity
     */
    public function addToAction(Food $food, int $quantity)
    {
        $orderItems = new OrderItems();
        $orderItems->setFood($food);
        $orderItems->setQuantity($quantity);

        $order = $this->provideOrder();
        $order->addOrderItem($orderItems);

//        $this->provideCollection()->persist();
        $this->orderRepository->update($order);

        $this->redirect('showCurrentOrder');
    }

    private function provideOrder(): Order
    {
        $collection = $this->provideCollection();
        if (!isset($collection['order'])) {
            $collection['order'] = $this->objectManager->get(Order::class);
            $collection->persist();
        }
        return $collection['order'];
    }

    private function provideCollection(): SubjectCollection
    {
        return SubjectCollection::get('hofexpress_app/order');
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
        $order = $this->provideOrder();
        $order->addOrderItems($orderItems->getFood());
        $order->orderRepository->update($order);
        $this->redirect('show');
    }

    /**
     * @param Food $food
     * @param int $quantity
     * @return void
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     * @ignorevalidation $order
     */
    public function editToAction(Food $food, int $quantity)
    {

        $orderItems = new OrderItems();
        $orderItems->setFood($food);
        $orderItems->setQuantity($quantity);

        $order = $this->provideOrder();
        $order->removeOrderItem($orderItems);
        $this->orderRepository->update($order);
        $this->redirect('showCurrentOrder');
    }

    /**
     * action update
     * 
     * @return void
     */
    public function updateAction()
    {
        $order = $this->provideOrder();
        $this->orderRepository->update($order);
        $this->redirect('show');
    }

    /**
     * action delete
     * @param OrderItems $orderItems
     * @return void
     */
    public function deleteAction(OrderItems $orderItems)
    {
        $order = $this->provideOrder();
        $this->orderRepository->remove($order);
        $order->removeOrderItem($orderItems);
        $this->orderRepository->update($order);
        $this->redirect('showCurrentOrder');
    }

    /**
     * @param OrderRepository $orderRepository
     */
    public function injectOrderRepository(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * @param \Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository $orderItemsRepository
     */
    public function injectOrderItemsRepository(\Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository $orderItemsRepository)
    {
        $this->orderItemsRepository = $orderItemsRepository;
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
