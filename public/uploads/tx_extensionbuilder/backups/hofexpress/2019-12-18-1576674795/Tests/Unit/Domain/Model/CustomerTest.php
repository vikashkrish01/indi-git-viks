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
}
