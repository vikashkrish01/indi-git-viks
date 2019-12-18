<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class OrderItemsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\OrderItems
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\OrderItems();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOrderIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getOrderId()
        );
    }

    /**
     * @test
     */
    public function setOrderIdForIntSetsOrderId()
    {
        $this->subject->setOrderId(12);

        self::assertAttributeEquals(
            12,
            'orderId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getQuantityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getQuantity()
        );
    }

    /**
     * @test
     */
    public function setQuantityForIntSetsQuantity()
    {
        $this->subject->setQuantity(12);

        self::assertAttributeEquals(
            12,
            'quantity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrdersReturnsInitialValueForOrder()
    {
        self::assertEquals(
            null,
            $this->subject->getOrders()
        );
    }

    /**
     * @test
     */
    public function setOrdersForOrderSetsOrders()
    {
        $ordersFixture = new \Hulk\Hofexpress\Domain\Model\Order();
        $this->subject->setOrders($ordersFixture);

        self::assertAttributeEquals(
            $ordersFixture,
            'orders',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFoodReturnsInitialValueForFood()
    {
        self::assertEquals(
            null,
            $this->subject->getFood()
        );
    }

    /**
     * @test
     */
    public function setFoodForFoodSetsFood()
    {
        $foodFixture = new \Hulk\Hofexpress\Domain\Model\Food();
        $this->subject->setFood($foodFixture);

        self::assertAttributeEquals(
            $foodFixture,
            'food',
            $this->subject
        );
    }
}
