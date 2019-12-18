<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class OrderTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\Order();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTotalAmountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTotalAmount()
        );
    }

    /**
     * @test
     */
    public function setTotalAmountForIntSetsTotalAmount()
    {
        $this->subject->setTotalAmount(12);

        self::assertAttributeEquals(
            12,
            'totalAmount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStringSetsStatus()
    {
        $this->subject->setStatus('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'status',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderStatusReturnsInitialValueForOrderStatus()
    {
        self::assertEquals(
            null,
            $this->subject->getOrderStatus()
        );
    }

    /**
     * @test
     */
    public function setOrderStatusForOrderStatusSetsOrderStatus()
    {
        $orderStatusFixture = new \Hulk\Hofexpress\Domain\Model\OrderStatus();
        $this->subject->setOrderStatus($orderStatusFixture);

        self::assertAttributeEquals(
            $orderStatusFixture,
            'orderStatus',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDeliveryReturnsInitialValueForDeliveryType()
    {
        self::assertEquals(
            null,
            $this->subject->getDelivery()
        );
    }

    /**
     * @test
     */
    public function setDeliveryForDeliveryTypeSetsDelivery()
    {
        $deliveryFixture = new \Hulk\Hofexpress\Domain\Model\DeliveryType();
        $this->subject->setDelivery($deliveryFixture);

        self::assertAttributeEquals(
            $deliveryFixture,
            'delivery',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustomerReturnsInitialValueForCustomer()
    {
        self::assertEquals(
            null,
            $this->subject->getCustomer()
        );
    }

    /**
     * @test
     */
    public function setCustomerForCustomerSetsCustomer()
    {
        $customerFixture = new \Hulk\Hofexpress\Domain\Model\Customer();
        $this->subject->setCustomer($customerFixture);

        self::assertAttributeEquals(
            $customerFixture,
            'customer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderItemsReturnsInitialValueForOrderItems()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOrderItems()
        );
    }

    /**
     * @test
     */
    public function setOrderItemsForObjectStorageContainingOrderItemsSetsOrderItems()
    {
        $orderItem = new \Hulk\Hofexpress\Domain\Model\OrderItems();
        $objectStorageHoldingExactlyOneOrderItems = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOrderItems->attach($orderItem);
        $this->subject->setOrderItems($objectStorageHoldingExactlyOneOrderItems);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOrderItems,
            'orderItems',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addOrderItemToObjectStorageHoldingOrderItems()
    {
        $orderItem = new \Hulk\Hofexpress\Domain\Model\OrderItems();
        $orderItemsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderItemsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($orderItem));
        $this->inject($this->subject, 'orderItems', $orderItemsObjectStorageMock);

        $this->subject->addOrderItem($orderItem);
    }

    /**
     * @test
     */
    public function removeOrderItemFromObjectStorageHoldingOrderItems()
    {
        $orderItem = new \Hulk\Hofexpress\Domain\Model\OrderItems();
        $orderItemsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderItemsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($orderItem));
        $this->inject($this->subject, 'orderItems', $orderItemsObjectStorageMock);

        $this->subject->removeOrderItem($orderItem);
    }
}
