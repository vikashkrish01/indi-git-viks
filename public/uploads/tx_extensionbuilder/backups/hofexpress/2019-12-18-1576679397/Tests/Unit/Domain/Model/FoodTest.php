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
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneImage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneImage->attach($image);
        $this->subject->setImage($objectStorageHoldingExactlyOneImage);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneImage,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addImageToObjectStorageHoldingImage()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $imageObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $imageObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($image));
        $this->inject($this->subject, 'image', $imageObjectStorageMock);

        $this->subject->addImage($image);
    }

    /**
     * @test
     */
    public function removeImageFromObjectStorageHoldingImage()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $imageObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $imageObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($image));
        $this->inject($this->subject, 'image', $imageObjectStorageMock);

        $this->subject->removeImage($image);
    }

    /**
     * @test
     */
    public function getFoodmenuReturnsInitialValueForRestaurantMenu()
    {
        self::assertEquals(
            null,
            $this->subject->getFoodmenu()
        );
    }

    /**
     * @test
     */
    public function setFoodmenuForRestaurantMenuSetsFoodmenu()
    {
        $foodmenuFixture = new \Hulk\Hofexpress\Domain\Model\RestaurantMenu();
        $this->subject->setFoodmenu($foodmenuFixture);

        self::assertAttributeEquals(
            $foodmenuFixture,
            'foodmenu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFoodTypesReturnsInitialValueForFoodType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFoodTypes()
        );
    }

    /**
     * @test
     */
    public function setFoodTypesForObjectStorageContainingFoodTypeSetsFoodTypes()
    {
        $foodType = new \Hulk\Hofexpress\Domain\Model\FoodType();
        $objectStorageHoldingExactlyOneFoodTypes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFoodTypes->attach($foodType);
        $this->subject->setFoodTypes($objectStorageHoldingExactlyOneFoodTypes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFoodTypes,
            'foodTypes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addFoodTypeToObjectStorageHoldingFoodTypes()
    {
        $foodType = new \Hulk\Hofexpress\Domain\Model\FoodType();
        $foodTypesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodTypesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($foodType));
        $this->inject($this->subject, 'foodTypes', $foodTypesObjectStorageMock);

        $this->subject->addFoodType($foodType);
    }

    /**
     * @test
     */
    public function removeFoodTypeFromObjectStorageHoldingFoodTypes()
    {
        $foodType = new \Hulk\Hofexpress\Domain\Model\FoodType();
        $foodTypesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodTypesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($foodType));
        $this->inject($this->subject, 'foodTypes', $foodTypesObjectStorageMock);

        $this->subject->removeFoodType($foodType);
    }
}
