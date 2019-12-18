<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class FoodTypeTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\FoodType
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\FoodType();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
