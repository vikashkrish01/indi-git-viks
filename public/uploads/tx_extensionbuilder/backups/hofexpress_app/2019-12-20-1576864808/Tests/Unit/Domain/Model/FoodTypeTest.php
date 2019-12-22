<?php
namespace Hulk\HofexpressApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class FoodTypeTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Domain\Model\FoodType
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\HofexpressApp\Domain\Model\FoodType();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSelectFoodTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSelectFoodType()
        );
    }

    /**
     * @test
     */
    public function setSelectFoodTypeForStringSetsSelectFoodType()
    {
        $this->subject->setSelectFoodType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'selectFoodType',
            $this->subject
        );
    }
}
