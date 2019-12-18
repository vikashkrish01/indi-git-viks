<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class RestaurantTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\Restaurant
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\Restaurant();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getRestaurantNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRestaurantName()
        );
    }

    /**
     * @test
     */
    public function setRestaurantNameForStringSetsRestaurantName()
    {
        $this->subject->setRestaurantName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'restaurantName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLogoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getLogo()
        );
    }

    /**
     * @test
     */
    public function setLogoForFileReferenceSetsLogo()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setLogo($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'logo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRestaurantTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRestaurantType()
        );
    }

    /**
     * @test
     */
    public function setRestaurantTypeForStringSetsRestaurantType()
    {
        $this->subject->setRestaurantType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'restaurantType',
            $this->subject
        );
    }
}
