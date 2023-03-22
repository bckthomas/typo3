<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ecmaskexport_3_cols_couleurs'] = 'tx_ecmaskexport_3_cols_couleurs';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ecmaskexport_3_cols_pleine_largeur'] = 'tx_ecmaskexport_3_cols_pleine_largeur';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ecmaskexport_formes'] = 'tx_ecmaskexport_formes';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ecmaskexport_squares'] = 'tx_ecmaskexport_squares';
$tempColumns = [
    'tx_ecmaskexport_col_color' => [
        'config' => [
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => 1,
                ],
            ],
            'items' => [
                [
                    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_col_color.I.0',
                    'purple',
                    '',
                    '',
                ],
                [
                    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_col_color.I.1',
                    'orrange',
                    '',
                    '',
                ],
            ],
            'renderType' => 'selectSingle',
            'type' => 'select',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_col_color',
    ],
    'tx_ecmaskexport_color_col' => [
        'config' => [
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => 1,
                ],
            ],
            'items' => [
                [
                    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_color_col.I.0',
                    'orange',
                    '',
                    '',
                ],
                [
                    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_color_col.I.1',
                    'purple',
                    '',
                    '',
                ],
            ],
            'renderType' => 'selectSingle',
            'type' => 'select',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_color_col',
    ],
    'tx_ecmaskexport_image_col' => [
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => [
                'fieldname' => 'tx_ecmaskexport_image_col',
            ],
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => [
                'columns' => [
                    'uid_local' => [
                        'config' => [
                            'appearance' => [
                                'elementBrowserType' => 'file',
                                'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
                            ],
                        ],
                    ],
                ],
                'types' => [
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                    ],
                    [
                        'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                    ],
                ],
            ],
            'filter' => [
                [
                    'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                    'parameters' => [
                        'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp',
                        'disallowedFileExtensions' => '',
                    ],
                ],
            ],
            'appearance' => [
                'useSortable' => 1,
                'headerThumbnail' => [
                    'field' => 'uid_local',
                    'height' => '45m',
                ],
                'enabledControls' => [
                    'info' => 1,
                    'new' => false,
                    'dragdrop' => 1,
                    'sort' => 0,
                    'hide' => 1,
                    'delete' => 1,
                    'localize' => 1,
                ],
                'elementBrowserEnabled' => 1,
                'fileUploadAllowed' => 1,
            ],
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_image_col',
    ],
    'tx_ecmaskexport_squares' => [
        'config' => [
            'appearance' => [
                'enabledControls' => [
                    'delete' => 1,
                    'dragdrop' => 1,
                    'hide' => 1,
                    'info' => 1,
                    'localize' => 1,
                    'new' => 1,
                    'sort' => 1,
                ],
                'levelLinksPosition' => 'top',
                'showAllLocalizationLink' => 1,
                'showNewRecordLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'useSortable' => 1,
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_ecmaskexport_squares',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_squares',
    ],
    'tx_ecmaskexport_text' => [
        'config' => [
            'enableRichtext' => 1,
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_text',
    ],
    'tx_ecmaskexport_text2' => [
        'config' => [
            'enableRichtext' => 1,
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_text2',
    ],
    'tx_ecmaskexport_text3' => [
        'config' => [
            'enableRichtext' => 1,
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_ecmaskexport_text3',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._ecmaskexport_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.ecmaskexport_3_cols_couleurs',
    'ecmaskexport_3_cols_couleurs',
    'tx_ecmaskexport_3_cols_couleurs',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.ecmaskexport_3_cols_pleine_largeur',
    'ecmaskexport_3_cols_pleine_largeur',
    'tx_ecmaskexport_3_cols_pleine_largeur',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.ecmaskexport_formes',
    'ecmaskexport_formes',
    'tx_ecmaskexport_formes',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ec_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.ecmaskexport_squares',
    'ecmaskexport_squares',
    'tx_ecmaskexport_squares',
];
$tempTypes = [
    'ecmaskexport_3_cols_couleurs' => [
        'columnsOverrides' => [
            'tx_ecmaskexport_col_color' => [
                'label' => 'Couleur de la colonne',
            ],
            'tx_ecmaskexport_text' => [
                'label' => 'Texte',
            ],
            'tx_ecmaskexport_text2' => [
                'label' => 'Texte',
            ],
            'tx_ecmaskexport_color_col' => [
                'label' => 'Couleur de fond',
            ],
            'tx_ecmaskexport_text3' => [
                'label' => 'Texte',
            ],
            'tx_ecmaskexport_image_col' => [
                'label' => 'Image',
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_ecmaskexport_col_color,image,header,bodytext,tx_ecmaskexport_text,tx_ecmaskexport_text2,tx_ecmaskexport_color_col,tx_ecmaskexport_text3,tx_ecmaskexport_image_col,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
    'ecmaskexport_3_cols_pleine_largeur' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
    'ecmaskexport_formes' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,media,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
    'ecmaskexport_squares' => [
        'columnsOverrides' => [
            'tx_ecmaskexport_squares' => [
                'label' => 'Compétences',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_ecmaskexport_squares,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ec_mask_export',
    'Configuration/TypoScript/',
    'ec_mask_export'
);

});

