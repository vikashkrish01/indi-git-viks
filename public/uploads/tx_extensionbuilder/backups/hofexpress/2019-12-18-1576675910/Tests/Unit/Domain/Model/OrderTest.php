<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class OrderTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\Order();
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
    public function getTotalAmountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTotalAmount()
        );
    }

    /**
     * @test
     */
    public function setTotalAmountForIntSetsTotalAmount()
    {
        $this->subject->setTotalAmount(12);

        self::assertAttributeEquals(
            12,
            'totalAmount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStringSetsStatus()
    {
        $this->subject->setStatus('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'status',
            $this->subject
        );
    }
}
