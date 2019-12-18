<?php
namespace Hulk\Hofexpress\Tests\Unit\Controller;

/**
 * Test case.
 */
class DeliveryTypeControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Hulk\Hofexpress\Controller\DeliveryTypeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Hulk\Hofexpress\Controller\DeliveryTypeController::class)
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
    public function listActionFetchesAllDeliveryTypesFromRepositoryAndAssignsThemToView()
    {

        $allDeliveryTypes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $deliveryTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $deliveryTypeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDeliveryTypes));
        $this->inject($this->subject, 'deliveryTypeRepository', $deliveryTypeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('deliveryTypes', $allDeliveryTypes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDeliveryTypeToView()
    {
        $deliveryType = new \Hulk\Hofexpress\Domain\Model\DeliveryType();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('deliveryType', $deliveryType);

        $this->subject->showAction($deliveryType);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenDeliveryTypeToDeliveryTypeRepository()
    {
        $deliveryType = new \Hulk\Hofexpress\Domain\Model\DeliveryType();

        $deliveryTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $deliveryTypeRepository->expects(self::once())->method('add')->with($deliveryType);
        $this->inject($this->subject, 'deliveryTypeRepository', $deliveryTypeRepository);

        $this->subject->createAction($deliveryType);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenDeliveryTypeToView()
    {
        $deliveryType = new \Hulk\Hofexpress\Domain\Model\DeliveryType();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('deliveryType', $deliveryType);

        $this->subject->editAction($deliveryType);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenDeliveryTypeInDeliveryTypeRepository()
    {
        $deliveryType = new \Hulk\Hofexpress\Domain\Model\DeliveryType();

        $deliveryTypeRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $deliveryTypeRepository->expects(self::once())->method('update')->with($deliveryType);
        $this->inject($this->subject, 'deliveryTypeRepository', $deliveryTypeRepository);

        $this->subject->updateAction($deliveryType);
    }
}
