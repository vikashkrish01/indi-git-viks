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
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
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

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }
}
