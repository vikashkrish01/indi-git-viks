<?php
namespace Hulk\HofexpressApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class RestaurantMenuControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Controller\RestaurantMenuController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Hulk\HofexpressApp\Controller\RestaurantMenuController::class)
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
    public function listActionFetchesAllRestaurantMenusFromRepositoryAndAssignsThemToView()
    {

        $allRestaurantMenus = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantMenuRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantMenuRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $restaurantMenuRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRestaurantMenus));
        $this->inject($this->subject, 'restaurantMenuRepository', $restaurantMenuRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('restaurantMenus', $allRestaurantMenus);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenRestaurantMenuToView()
    {
        $restaurantMenu = new \Hulk\HofexpressApp\Domain\Model\RestaurantMenu();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('restaurantMenu', $restaurantMenu);

        $this->subject->showAction($restaurantMenu);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenRestaurantMenuToRestaurantMenuRepository()
    {
        $restaurantMenu = new \Hulk\HofexpressApp\Domain\Model\RestaurantMenu();

        $restaurantMenuRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantMenuRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantMenuRepository->expects(self::once())->method('add')->with($restaurantMenu);
        $this->inject($this->subject, 'restaurantMenuRepository', $restaurantMenuRepository);

        $this->subject->createAction($restaurantMenu);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenRestaurantMenuToView()
    {
        $restaurantMenu = new \Hulk\HofexpressApp\Domain\Model\RestaurantMenu();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('restaurantMenu', $restaurantMenu);

        $this->subject->editAction($restaurantMenu);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenRestaurantMenuInRestaurantMenuRepository()
    {
        $restaurantMenu = new \Hulk\HofexpressApp\Domain\Model\RestaurantMenu();

        $restaurantMenuRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantMenuRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantMenuRepository->expects(self::once())->method('update')->with($restaurantMenu);
        $this->inject($this->subject, 'restaurantMenuRepository', $restaurantMenuRepository);

        $this->subject->updateAction($restaurantMenu);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenRestaurantMenuFromRestaurantMenuRepository()
    {
        $restaurantMenu = new \Hulk\HofexpressApp\Domain\Model\RestaurantMenu();

        $restaurantMenuRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\RestaurantMenuRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $restaurantMenuRepository->expects(self::once())->method('remove')->with($restaurantMenu);
        $this->inject($this->subject, 'restaurantMenuRepository', $restaurantMenuRepository);

        $this->subject->deleteAction($restaurantMenu);
    }
}
