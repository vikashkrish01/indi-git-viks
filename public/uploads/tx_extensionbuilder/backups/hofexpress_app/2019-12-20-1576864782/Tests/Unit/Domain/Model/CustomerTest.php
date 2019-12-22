<?php
namespace Hulk\HofexpressApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class CustomerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Domain\Model\Customer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\HofexpressApp\Domain\Model\Customer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUserIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUserId()
        );
    }

    /**
     * @test
     */
    public function setUserIdForIntSetsUserId()
    {
        $this->subject->setUserId(12);

        self::assertAttributeEquals(
            12,
            'userId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneNumberReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPhoneNumber()
        );
    }

    /**
     * @test
     */
    public function setPhoneNumberForIntSetsPhoneNumber()
    {
        $this->subject->setPhoneNumber(12);

        self::assertAttributeEquals(
            12,
            'phoneNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForAddress()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForObjectStorageContainingAddressSetsAddress()
    {
        $addres = new \Hulk\HofexpressApp\Domain\Model\Address();
        $objectStorageHoldingExactlyOneAddress = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAddress->attach($addres);
        $this->subject->setAddress($objectStorageHoldingExactlyOneAddress);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAddress,
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAddresToObjectStorageHoldingAddress()
    {
        $addres = new \Hulk\HofexpressApp\Domain\Model\Address();
        $addressObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $addressObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($addres));
        $this->inject($this->subject, 'address', $addressObjectStorageMock);

        $this->subject->addAddres($addres);
    }

    /**
     * @test
     */
    public function removeAddresFromObjectStorageHoldingAddress()
    {
        $addres = new \Hulk\HofexpressApp\Domain\Model\Address();
        $addressObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $addressObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($addres));
        $this->inject($this->subject, 'address', $addressObjectStorageMock);

        $this->subject->removeAddres($addres);
    }
}
