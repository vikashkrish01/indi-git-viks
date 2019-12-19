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
 * AddressController
 */
class AddressController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * addressRepository
     * 
     * @var \Hulk\HofexpressApp\Domain\Repository\AddressRepository
     */
    protected $addressRepository = null;

    /**
     * action list
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Address
     * @return void
     */
    public function listAction()
    {
        $addresses = $this->addressRepository->findAll();
        $this->view->assign('addresses', $addresses);
    }

    /**
     * action new
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Address
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Address
     * @return void
     */
    public function createAction(\Hulk\HofexpressApp\Domain\Model\Address $newAddress)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->add($newAddress);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Address
     * @ignorevalidation $address
     * @return void
     */
    public function editAction(\Hulk\HofexpressApp\Domain\Model\Address $address)
    {
        $this->view->assign('address', $address);
    }

    /**
     * action update
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Address
     * @return void
     */
    public function updateAction(\Hulk\HofexpressApp\Domain\Model\Address $address)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->update($address);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Address
     * @return void
     */
    public function deleteAction(\Hulk\HofexpressApp\Domain\Model\Address $address)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->remove($address);
        $this->redirect('list');
    }

    /**
     * @param \Hulk\HofexpressApp\Domain\Repository\AddressRepository $AddressRepository
     */
    public function injectAddressRepository(\Hulk\HofexpressApp\Domain\Repository\AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }
}
