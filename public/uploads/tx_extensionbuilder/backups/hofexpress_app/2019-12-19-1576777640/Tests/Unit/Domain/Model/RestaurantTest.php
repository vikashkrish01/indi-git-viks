<?php
namespace Hulk\HofexpressApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class RestaurantTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Domain\Model\Restaurant
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\HofexpressApp\Domain\Model\Restaurant();
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

    /**
     * @test
     */
    public function getCoverImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getCoverImage()
        );
    }

    /**
     * @test
     */
    public function setCoverImageForFileReferenceSetsCoverImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setCoverImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'coverImage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMenuReturnsInitialValueForRestaurantMenu()
    {
        self::assertEquals(
            null,
            $this->subject->getMenu()
        );
    }

    /**
     * @test
     */
    public function setMenuForRestaurantMenuSetsMenu()
    {
        $menuFixture = new \Hulk\HofexpressApp\Domain\Model\RestaurantMenu();
        $this->subject->setMenu($menuFixture);

        self::assertAttributeEquals(
            $menuFixture,
            'menu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFoodReturnsInitialValueForFood()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFood()
        );
    }

    /**
     * @test
     */
    public function setFoodForObjectStorageContainingFoodSetsFood()
    {
        $food = new \Hulk\HofexpressApp\Domain\Model\Food();
        $objectStorageHoldingExactlyOneFood = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFood->attach($food);
        $this->subject->setFood($objectStorageHoldingExactlyOneFood);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFood,
            'food',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addFoodToObjectStorageHoldingFood()
    {
        $food = new \Hulk\HofexpressApp\Domain\Model\Food();
        $foodObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($food));
        $this->inject($this->subject, 'food', $foodObjectStorageMock);

        $this->subject->addFood($food);
    }

    /**
     * @test
     */
    public function removeFoodFromObjectStorageHoldingFood()
    {
        $food = new \Hulk\HofexpressApp\Domain\Model\Food();
        $foodObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($food));
        $this->inject($this->subject, 'food', $foodObjectStorageMock);

        $this->subject->removeFood($food);
    }
}
