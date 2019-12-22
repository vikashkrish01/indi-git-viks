<?php
namespace Hulk\HofexpressApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class DeliveryTypeTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Domain\Model\DeliveryType
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\HofexpressApp\Domain\Model\DeliveryType();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getHomeOrTakeTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHomeOrTakeType()
        );
    }

    /**
     * @test
     */
    public function setHomeOrTakeTypeForStringSetsHomeOrTakeType()
    {
        $this->subject->setHomeOrTakeType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'homeOrTakeType',
            $this->subject
        );
    }
}
