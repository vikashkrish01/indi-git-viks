<?php
namespace Hulk\Hofexpress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class RestaurantMenuTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Domain\Model\RestaurantMenu
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Hulk\Hofexpress\Domain\Model\RestaurantMenu();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
