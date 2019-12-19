<?php
namespace Hulk\HofexpressApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class AddressTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Domain\Model\Address
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\HofexpressApp\Domain\Model\Address();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );
    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRegionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRegion()
        );
    }

    /**
     * @test
     */
    public function setRegionForStringSetsRegion()
    {
        $this->subject->setRegion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'region',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getZipcodeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getZipcode()
        );
    }

    /**
     * @test
     */
    public function setZipcodeForIntSetsZipcode()
    {
        $this->subject->setZipcode(12);

        self::assertAttributeEquals(
            12,
            'zipcode',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHouseNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHouseNumber()
        );
    }

    /**
     * @test
     */
    public function setHouseNumberForStringSetsHouseNumber()
    {
        $this->subject->setHouseNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'houseNumber',
            $this->subject
        );
    }
}
