<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Hulk.HofexpressApp',
            'Hofexpress',
            [
                'Customer' => 'list, show, new, create, edit, update, delete',
                'Address' => 'list, new, create, edit, update, delete',
                'Food' => 'list, show, new, create, edit, update, delete',
                'Restaurant' => 'list, show, new, create, edit, update, delete',
                'Order' => 'list, show, new, create, edit, update, delete',
                'OrderItems' => 'list, show, new, create, edit, update, delete',
                'DeliveryType' => 'list, new, create, edit, update',
                'FoodType' => 'list, new, create, edit, update, delete',
                'RestaurantMenu' => 'list, show, new, create, edit, update, delete',
                'OrderStatus' => 'list, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Customer' => 'create, update, delete',
                'Address' => 'create, update, delete',
                'Food' => 'create, update, delete',
                'Restaurant' => 'create, update, delete',
                'Order' => 'create, update, delete',
                'OrderItems' => 'create, update, delete',
                'DeliveryType' => 'create, update',
                'FoodType' => 'create, update, delete',
                'RestaurantMenu' => 'create, update, delete',
                'OrderStatus' => 'create, update, delete'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        hofexpress {
                            iconIdentifier = hofexpress_app-plugin-hofexpress
                            title = LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_app_hofexpress.name
                            description = LLL:EXT:hofexpress_app/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_app_hofexpress.description
                            tt_content_defValues {
                                CType = list
                                list_type = hofexpressapp_hofexpress
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'hofexpress_app-plugin-hofexpress',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:hofexpress_app/Resources/Public/Icons/user_plugin_hofexpress.svg']
			);
		
    }
);
