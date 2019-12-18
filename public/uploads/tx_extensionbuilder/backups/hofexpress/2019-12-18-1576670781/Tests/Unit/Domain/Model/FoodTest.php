<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class FoodTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\Food
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\Food();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFoodNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFoodName()
        );
    }

    /**
     * @test
     */
    public function setFoodNameForStringSetsFoodName()
    {
        $this->subject->setFoodName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'foodName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRestaurantIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRestaurantId()
        );
    }

    /**
     * @test
     */
    public function setRestaurantIdForIntSetsRestaurantId()
    {
        $this->subject->setRestaurantId(12);

        self::assertAttributeEquals(
            12,
            'restaurantId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForIntSetsPrice()
    {
        $this->subject->setPrice(12);

        self::assertAttributeEquals(
            12,
            'price',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFoodTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFoodType()
        );
    }

    /**
     * @test
     */
    public function setFoodTypeForStringSetsFoodType()
    {
        $this->subject->setFoodType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'foodType',
            $this->subject
        );
    }
}
