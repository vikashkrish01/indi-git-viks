<?php
namespace Hulk\HofexpressApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class OrderItemsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Domain\Model\OrderItems
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\HofexpressApp\Domain\Model\OrderItems();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
        $foodFixture = new \Hulk\HofexpressApp\Domain\Model\Food();
        $this->subject->setFood($foodFixture);

        self::assertAttributeEquals(
            $foodFixture,
            'food',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrderReturnsInitialValueForOrder()
    {
        self::assertEquals(
            null,
            $this->subject->getOrder()
        );
    }

    /**
     * @test
     */
    public function setOrderForOrderSetsOrder()
    {
        $orderFixture = new \Hulk\HofexpressApp\Domain\Model\Order();
        $this->subject->setOrder($orderFixture);

        self::assertAttributeEquals(
            $orderFixture,
            'order',
            $this->subject
        );
    }
}
