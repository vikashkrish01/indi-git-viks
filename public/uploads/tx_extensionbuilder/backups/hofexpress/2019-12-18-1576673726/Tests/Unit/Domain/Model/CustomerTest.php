<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CustomerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\Customer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\Customer();
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
    public function getEmailIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmailId()
        );
    }

    /**
     * @test
     */
    public function setEmailIdForStringSetsEmailId()
    {
        $this->subject->setEmailId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'emailId',
            $this->subject
        );
    }
}
