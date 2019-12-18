<?php
namespace Hulk\Hofexpress\Tests\Unit\Controller;

/**
 * Test case.
 */
class FoodControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Controller\FoodController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Hulk\Hofexpress\Controller\FoodController::class)
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
    public function listActionFetchesAllFoodsFromRepositoryAndAssignsThemToView()
    {

        $allFoods = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $foodRepository = $this->getMockBuilder(\Hulk\Hofexpress\Domain\Repository\FoodRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $foodRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFoods));
        $this->inject($this->subject, 'foodRepository', $foodRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('foods', $allFoods);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenFoodToView()
    {
        $food = new \Hulk\Hofexpress\Domain\Model\Food();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('food', $food);

        $this->subject->showAction($food);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenFoodToFoodRepository()
    {
        $food = new \Hulk\Hofexpress\Domain\Model\Food();

        $foodRepository = $this->getMockBuilder(\Hulk\Hofexpress\Domain\Repository\FoodRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodRepository->expects(self::once())->method('add')->with($food);
        $this->inject($this->subject, 'foodRepository', $foodRepository);

        $this->subject->createAction($food);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenFoodToView()
    {
        $food = new \Hulk\Hofexpress\Domain\Model\Food();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('food', $food);

        $this->subject->editAction($food);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenFoodInFoodRepository()
    {
        $food = new \Hulk\Hofexpress\Domain\Model\Food();

        $foodRepository = $this->getMockBuilder(\Hulk\Hofexpress\Domain\Repository\FoodRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodRepository->expects(self::once())->method('update')->with($food);
        $this->inject($this->subject, 'foodRepository', $foodRepository);

        $this->subject->updateAction($food);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenFoodFromFoodRepository()
    {
        $food = new \Hulk\Hofexpress\Domain\Model\Food();

        $foodRepository = $this->getMockBuilder(\Hulk\Hofexpress\Domain\Repository\FoodRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodRepository->expects(self::once())->method('remove')->with($food);
        $this->inject($this->subject, 'foodRepository', $foodRepository);

        $this->subject->deleteAction($food);
    }
}
