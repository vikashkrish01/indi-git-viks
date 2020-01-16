<?php
namespace Hulk\HofexpressApp\Controller;

use Hulk\HofexpressApp\Domain\Model\Customer;
use Hulk\HofexpressApp\Domain\Model\Food;
use Hulk\HofexpressApp\Domain\Model\OrderItems;
use Hulk\HofexpressApp\Domain\Model\Restaurant;
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
     * @return void
     */
    public function showAction()
    {
        try {
            $customer = SubjectResolver::get()->forClassName(Customer::class)->forPropertyName('userId')->resolve();
        } catch (InvalidSessionException $exception) {
            $customer = null;
        }
        $orderItems = $this->provideFoodList();
        $this->view->assign('customer', $customer);
        $this->view->assign('orderItems', $orderItems);
    }

    /**
     * action show
     * @param Food $food
     * @param int $quantity
     * @param Restaurant $restaurant
     * @return void
     */
    public function addAction(Food  $food, int $quantity=null, Restaurant $restaurant)
    {
        try {
            $customer = SubjectResolver::get()->forClassName(Customer::class)->forPropertyName('userId')->resolve();
        } catch (InvalidSessionException $exception) {
            $customer = null;
        }

        // search for existing OrderItems in session, objects (search by Food
        // either null or one existing OrderItem

        $orderItems = new OrderItems();
        $this->view->assign('food', $food);
        $orderItems->setQuantity($quantity);
        $this->view->assign('quantity', $quantity);
        $this->view->assign('orderItems', $orderItems);
        $this->view->assign('restaurant', $restaurant);
        $this->view->assign('customer', $customer);
//        $this->redirect('show');


        // fetching Order from Session
        // Order->addOrderItem

//        $orderItems = $this->provideFoodList();

    }



    private function provideFoodList()
    {
        $collection = SubjectCollection::get('hofexpress_app/orderItems');
        if (!isset($collection['orderItems'])) {
            $collection['orderItems'] = $this->objectManager->get(OrderItems::class);
            $collection->persist();
        }
        return $collection['orderItems'];
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
     * @param \Hulk\HofexpressApp\Domain\Model\OrderItems $orderItems
     * @return void
     */
    public function createAction(\Hulk\HofexpressApp\Domain\Model\OrderItems $newOrderItems)
    {
        $this->orderItemsRepository->add($newOrderItems);
        $this->redirect('show');
    }

    /**
     * action edit
     *
     * @param \Hulk\HofexpressApp\Domain\Model\OrderItems $orderItems
     * @ignorevalidation $orderItems
     * @return void
     */
    public function editAction(\Hulk\HofexpressApp\Domain\Model\OrderItems $orderItems)
    {
        $this->view->assign('orderItems', $orderItems);
    }

    /**
     * action update
     *
     * @param \Hulk\HofexpressApp\Domain\Model\OrderItems $orderItems
     * @return void
     */
    public function updateAction(\Hulk\HofexpressApp\Domain\Model\OrderItems $orderItems)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderItemsRepository->update($orderItems);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Hulk\HofexpressApp\Domain\Model\OrderItems $orderItems
     * @return void
     */
    public function deleteAction(\Hulk\HofexpressApp\Domain\Model\OrderItems $orderItems)
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
