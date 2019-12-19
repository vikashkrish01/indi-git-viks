<?php
namespace Hulk\HofexpressApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class FoodTypeControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Controller\FoodTypeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Hulk\HofexpressApp\Controller\FoodTypeController::class)
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
    public function listActionFetchesAllFoodTypesFromRepositoryAndAssignsThemToView()
    {

        $allFoodTypes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $foodTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $foodTypeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFoodTypes));
        $this->inject($this->subject, 'foodTypeRepository', $foodTypeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('foodTypes', $allFoodTypes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenFoodTypeToFoodTypeRepository()
    {
        $foodType = new \Hulk\HofexpressApp\Domain\Model\FoodType();

        $foodTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodTypeRepository->expects(self::once())->method('add')->with($foodType);
        $this->inject($this->subject, 'foodTypeRepository', $foodTypeRepository);

        $this->subject->createAction($foodType);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenFoodTypeToView()
    {
        $foodType = new \Hulk\HofexpressApp\Domain\Model\FoodType();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('foodType', $foodType);

        $this->subject->editAction($foodType);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenFoodTypeInFoodTypeRepository()
    {
        $foodType = new \Hulk\HofexpressApp\Domain\Model\FoodType();

        $foodTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodTypeRepository->expects(self::once())->method('update')->with($foodType);
        $this->inject($this->subject, 'foodTypeRepository', $foodTypeRepository);

        $this->subject->updateAction($foodType);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenFoodTypeFromFoodTypeRepository()
    {
        $foodType = new \Hulk\HofexpressApp\Domain\Model\FoodType();

        $foodTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $foodTypeRepository->expects(self::once())->method('remove')->with($foodType);
        $this->inject($this->subject, 'foodTypeRepository', $foodTypeRepository);

        $this->subject->deleteAction($foodType);
    }
}
