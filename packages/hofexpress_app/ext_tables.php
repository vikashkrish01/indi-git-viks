<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Hulk.HofexpressApp',
            'Hofexpress',
            'HofExpress'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('hofexpress_app', 'Configuration/TypoScript', 'HofExpress');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_customer', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_customer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_customer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_address', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_address.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_address');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_food', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_food.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_food');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_restaurant', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_restaurant.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_restaurant');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_order', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_order.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_order');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_orderitems', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_orderitems.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_orderitems');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_deliverytype', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_deliverytype.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_deliverytype');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_foodtype', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_foodtype.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_foodtype');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_restaurantmenu', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_restaurantmenu.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_restaurantmenu');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hofexpressapp_domain_model_orderstatus', 'EXT:hofexpress_app/Resources/Private/Language/locallang_csh_tx_hofexpressapp_domain_model_orderstatus.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hofexpressapp_domain_model_orderstatus');

    }
);
