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
 * CustomerController
 */
class CustomerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * customerRepository
     * 
     * @var \Hulk\HofexpressApp\Domain\Repository\CustomerRepository
     */
    protected $customerRepository = null;

    /**
     * action list
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Customer
     * @return void
     */
    public function listAction()
    {
        $customers = $this->customerRepository->findAll();
        $this->view->assign('customers', $customers);
    }

    /**
     * action show
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Customer
     * @return void
     */
    public function showAction(\Hulk\HofexpressApp\Domain\Model\Customer $customer)
    {
        $this->view->assign('customer', $customer);
    }

    /**
     * action new
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Customer
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Customer
     * @return void
     */
    public function createAction(\Hulk\HofexpressApp\Domain\Model\Customer $newCustomer)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->add($newCustomer);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Customer
     * @ignorevalidation $customer
     * @return void
     */
    public function editAction(\Hulk\HofexpressApp\Domain\Model\Customer $customer)
    {
        $this->view->assign('customer', $customer);
    }

    /**
     * action update
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Customer
     * @return void
     */
    public function updateAction(\Hulk\HofexpressApp\Domain\Model\Customer $customer)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->update($customer);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param Hulk\HofexpressApp\Domain\Model\Customer
     * @return void
     */
    public function deleteAction(\Hulk\HofexpressApp\Domain\Model\Customer $customer)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->customerRepository->remove($customer);
        $this->redirect('list');
    }

    /**
     * @param \Hulk\HofexpressApp\Domain\Repository\CustomerRepository $CustomerRepository
     */
    public function injectCustomerRepository(\Hulk\HofexpressApp\Domain\Repository\CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }
}
