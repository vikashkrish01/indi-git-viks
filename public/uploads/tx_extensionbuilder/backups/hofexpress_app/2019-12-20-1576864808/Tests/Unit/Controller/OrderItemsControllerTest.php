<?php
namespace Hulk\HofexpressApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hof Express <support@hofexpress.com>
 */
class OrderItemsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\HofexpressApp\Controller\OrderItemsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Hulk\HofexpressApp\Controller\OrderItemsController::class)
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
    public function listActionFetchesAllOrderItemssFromRepositoryAndAssignsThemToView()
    {

        $allOrderItemss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $orderItemsRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $orderItemsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOrderItemss));
        $this->inject($this->subject, 'orderItemsRepository', $orderItemsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('orderItemss', $allOrderItemss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOrderItemsToView()
    {
        $orderItems = new \Hulk\HofexpressApp\Domain\Model\OrderItems();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('orderItems', $orderItems);

        $this->subject->showAction($orderItems);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenOrderItemsToOrderItemsRepository()
    {
        $orderItems = new \Hulk\HofexpressApp\Domain\Model\OrderItems();

        $orderItemsRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderItemsRepository->expects(self::once())->method('add')->with($orderItems);
        $this->inject($this->subject, 'orderItemsRepository', $orderItemsRepository);

        $this->subject->createAction($orderItems);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenOrderItemsToView()
    {
        $orderItems = new \Hulk\HofexpressApp\Domain\Model\OrderItems();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('orderItems', $orderItems);

        $this->subject->editAction($orderItems);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenOrderItemsInOrderItemsRepository()
    {
        $orderItems = new \Hulk\HofexpressApp\Domain\Model\OrderItems();

        $orderItemsRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderItemsRepository->expects(self::once())->method('update')->with($orderItems);
        $this->inject($this->subject, 'orderItemsRepository', $orderItemsRepository);

        $this->subject->updateAction($orderItems);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenOrderItemsFromOrderItemsRepository()
    {
        $orderItems = new \Hulk\HofexpressApp\Domain\Model\OrderItems();

        $orderItemsRepository = $this->getMockBuilder(\Hulk\HofexpressApp\Domain\Repository\OrderItemsRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderItemsRepository->expects(self::once())->method('remove')->with($orderItems);
        $this->inject($this->subject, 'orderItemsRepository', $orderItemsRepository);

        $this->subject->deleteAction($orderItems);
    }
}
