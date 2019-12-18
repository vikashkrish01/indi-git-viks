<?php
namespace Hulk\Hofexpress\Controller;


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
     * @var \Hulk\Hofexpress\Domain\Repository\AddressRepository
     */
    protected $addressRepository = null;

    /**
     * @param \Hulk\Hofexpress\Domain\Repository\AddressRepository $addressRepository
     */
    public function injectAddressRepository(\Hulk\Hofexpress\Domain\Repository\AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    /**
     * action list
     * 
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
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Address $newAddress
     * @return void
     */
    public function createAction(\Hulk\Hofexpress\Domain\Model\Address $newAddress)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->add($newAddress);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Address $address
     * @ignorevalidation $address
     * @return void
     */
    public function editAction(\Hulk\Hofexpress\Domain\Model\Address $address)
    {
        $this->view->assign('address', $address);
    }

    /**
     * action update
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Address $address
     * @return void
     */
    public function updateAction(\Hulk\Hofexpress\Domain\Model\Address $address)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->update($address);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Address $address
     * @return void
     */
    public function deleteAction(\Hulk\Hofexpress\Domain\Model\Address $address)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addressRepository->remove($address);
        $this->redirect('list');
    }
}
