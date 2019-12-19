<?php
namespace Hulk\HofexpressApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class RestaurantControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Controller\RestaurantController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Hulk\HofexpressApp\Controller\RestaurantController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllRestaurantsFromRepositoryAndAssignsThemToView()
    {

        $allRestaurants = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $restaurantRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRestaurants));
        $this->inject($this->subject, 'restaurantRepository', $restaurantRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('restaurants', $allRestaurants);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenRestaurantToView()
    {
        $restaurant = new \Hulk\HofexpressApp\Domain\Model\Restaurant();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('restaurant', $restaurant);

        $this->subject->showAction($restaurant);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenRestaurantToRestaurantRepository()
    {
        $restaurant = new \Hulk\HofexpressApp\Domain\Model\Restaurant();

        $restaurantRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantRepository->expects(self::once())->method('add')->with($restaurant);
        $this->inject($this->subject, 'restaurantRepository', $restaurantRepository);

        $this->subject->createAction($restaurant);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenRestaurantToView()
    {
        $restaurant = new \Hulk\HofexpressApp\Domain\Model\Restaurant();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('restaurant', $restaurant);

        $this->subject->editAction($restaurant);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenRestaurantInRestaurantRepository()
    {
        $restaurant = new \Hulk\HofexpressApp\Domain\Model\Restaurant();

        $restaurantRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantRepository->expects(self::once())->method('update')->with($restaurant);
        $this->inject($this->subject, 'restaurantRepository', $restaurantRepository);

        $this->subject->updateAction($restaurant);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenRestaurantFromRestaurantRepository()
    {
        $restaurant = new \Hulk\HofexpressApp\Domain\Model\Restaurant();

        $restaurantRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantRepository->expects(self::once())->method('remove')->with($restaurant);
        $this->inject($this->subject, 'restaurantRepository', $restaurantRepository);

        $this->subject->deleteAction($restaurant);
    }
}
