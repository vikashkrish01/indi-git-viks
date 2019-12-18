<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:hofexpress/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_domain_model_order',
        'label' => 'user_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'status',
        'iconfile' => 'EXT:hofexpress/Resources/Public/Icons/tx_hofexpress_domain_model_order.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, user_id, total_amount, status, order_status, delivery, customer',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, user_id, total_amount, status, order_status, delivery, customer, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_hofexpress_domain_model_order',
                'foreign_table_where' => 'AND {#tx_hofexpress_domain_model_order}.{#pid}=###CURRENT_PID### AND {#tx_hofexpress_domain_model_order}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'user_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hofexpress/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_domain_model_order.user_id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'total_amount' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hofexpress/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_domain_model_order.total_amount',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hofexpress/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_domain_model_order.status',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'order_status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hofexpress/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_domain_model_order.order_status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_hofexpress_domain_model_orderstatus',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'delivery' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hofexpress/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_domain_model_order.delivery',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_hofexpress_domain_model_deliverytype',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'customer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:hofexpress/Resources/Private/Language/locallang_db.xlf:tx_hofexpress_domain_model_order.customer',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_hofexpress_domain_model_customer',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
    
    ],
];
