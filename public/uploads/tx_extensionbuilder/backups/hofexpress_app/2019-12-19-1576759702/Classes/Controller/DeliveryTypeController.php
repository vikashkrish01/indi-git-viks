<?php
namespace Hulk\HofexpressApp\Controller;


/***
 *
 * This file is part of the "HofExpress" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * DeliveryTypeController
 */
class DeliveryTypeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $deliveryTypes = $this->deliveryTypeRepository->findAll();
        $this->view->assign('deliveryTypes', $deliveryTypes);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \Hulk\Hofexpress\Domain\Model\DeliveryType $newDeliveryType
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\DeliveryType $newDeliveryType)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->deliveryTypeRepository->add($newDeliveryType);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\DeliveryType $deliveryType
     * @ignorevalidation $deliveryType
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\DeliveryType $deliveryType)
    {
        $this->view->assign('deliveryType', $deliveryType);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\DeliveryType $deliveryType
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\DeliveryType $deliveryType)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->deliveryTypeRepository->update($deliveryType);
        $this->redirect('list');
    }
}
