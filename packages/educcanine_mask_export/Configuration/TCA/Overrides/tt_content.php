<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['educcanineeduccanine_mask_exportexport_qui_suisje'] = 'tx_educcanineeduccanine_mask_exportexport_qui_suisje';
$tempColumns = [
    'tx_educcanineeduccanine_mask_exportexport_circle' => [
        'config' => [
            'items' => [],
            'type' => 'check',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_educcanineeduccanine_mask_exportexport_circle',
    ],
    'tx_educcanineeduccanine_mask_exportexport_empreinte' => [
        'config' => [
            'items' => [],
            'type' => 'check',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_educcanineeduccanine_mask_exportexport_empreinte',
    ],
    'tx_educcanineeduccanine_mask_exportexport_rectangle' => [
        'config' => [
            'items' => [],
            'type' => 'check',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_educcanineeduccanine_mask_exportexport_rectangle',
    ],
    'tx_educcanineeduccanine_mask_exportexport_theme' => [
        'config' => [
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => 1,
                ],
            ],
            'items' => [
                [
                    'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_educcanineeduccanine_mask_exportexport_theme.I.0',
                    'theme1',
                    '',
                    '',
                ],
                [
                    'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_educcanineeduccanine_mask_exportexport_theme.I.1',
                    'theme2',
                    '',
                    '',
                ],
            ],
            'renderType' => 'selectSingle',
            'type' => 'select',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_educcanineeduccanine_mask_exportexport_theme',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._educcanineeduccanine_mask_exportexport_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:educcanine_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.educcanineeduccanine_mask_exportexport_qui_suisje',
    'educcanineeduccanine_mask_exportexport_qui_suisje',
    'tx_educcanineeduccanine_mask_exportexport_qui_suisje',
];
$tempTypes = [
    'educcanineeduccanine_mask_exportexport_qui_suisje' => [
        'columnsOverrides' => [
            'tx_educcanineeduccanine_mask_exportexport_theme' => [
                'label' => 'Thème',
            ],
            'tx_educcanineeduccanine_mask_exportexport_circle' => [
                'label' => 'Afficher le cercle',
            ],
            'tx_educcanineeduccanine_mask_exportexport_rectangle' => [
                'label' => 'Afficher le rectangle',
            ],
            'tx_educcanineeduccanine_mask_exportexport_empreinte' => [
                'label' => 'Afficher l\'empreinte',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,image,tx_educcanineeduccanine_mask_exportexport_theme,tx_educcanineeduccanine_mask_exportexport_circle,tx_educcanineeduccanine_mask_exportexport_rectangle,tx_educcanineeduccanine_mask_exportexport_empreinte,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'educcanine_mask_export',
    'Configuration/TypoScript/',
    'educcanine_mask_export'
);

});

