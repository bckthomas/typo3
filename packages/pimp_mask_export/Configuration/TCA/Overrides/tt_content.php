<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pimpmaskexport_accueil__image_plein_cran'] = 'tx_pimpmaskexport_accueil__image_plein_cran';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pimpmaskexport_citation'] = 'tx_pimpmaskexport_citation';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pimpmaskexport_ma_dmarche'] = 'tx_pimpmaskexport_ma_dmarche';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pimpmaskexport_map'] = 'tx_pimpmaskexport_map';
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['pimpmaskexport_mes_ralisations'] = 'tx_pimpmaskexport_mes_ralisations';
$tempColumns = [
    'tx_pimpmaskexport_adress' => [
        'config' => [
            'enableRichtext' => 1,
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_pimpmaskexport_adress',
    ],
    'tx_pimpmaskexport_category' => [
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
            'foreign_table' => 'tx_pimpmaskexport_category',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '4',
            'type' => 'inline',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_pimpmaskexport_category',
    ],
    'tx_pimpmaskexport_demarche' => [
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
            'foreign_table' => 'tx_pimpmaskexport_demarche',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_pimpmaskexport_demarche',
    ],
    'tx_pimpmaskexport_image' => [
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => [
                'fieldname' => 'tx_pimpmaskexport_image',
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
            'maxitems' => '2',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_pimpmaskexport_image',
    ],
    'tx_pimpmaskexport_quote' => [
        'config' => [
            'enableRichtext' => 1,
            'type' => 'text',
            'softref' => 'typolink_tag,email[subst],url',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_pimpmaskexport_quote',
    ],
    'tx_pimpmaskexport_texts' => [
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
            'foreign_table' => 'tx_pimpmaskexport_texts',
            'foreign_table_field' => 'parenttable',
            'maxitems' => '3',
            'type' => 'inline',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_pimpmaskexport_texts',
    ],
    'tx_pimpmaskexport_title' => [
        'config' => [
            'type' => 'text',
            'wrap' => 'virtual',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.tx_pimpmaskexport_title',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._pimpmaskexport_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.pimpmaskexport_accueil__image_plein_cran',
    'pimpmaskexport_accueil__image_plein_cran',
    'tx_pimpmaskexport_accueil__image_plein_cran',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.pimpmaskexport_citation',
    'pimpmaskexport_citation',
    'tx_pimpmaskexport_citation',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.pimpmaskexport_ma_dmarche',
    'pimpmaskexport_ma_dmarche',
    'tx_pimpmaskexport_ma_dmarche',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.pimpmaskexport_map',
    'pimpmaskexport_map',
    'tx_pimpmaskexport_map',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:pimp_mask_export/Resources/Private/Language/locallang_db.xlf:tt_content.CType.pimpmaskexport_mes_ralisations',
    'pimpmaskexport_mes_ralisations',
    'tx_pimpmaskexport_mes_ralisations',
];
$tempTypes = [
    'pimpmaskexport_accueil__image_plein_cran' => [
        'columnsOverrides' => [
            'tx_pimpmaskexport_texts' => [
                'label' => 'Textes',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,image,tx_pimpmaskexport_texts,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
    'pimpmaskexport_citation' => [
        'columnsOverrides' => [
            'tx_pimpmaskexport_title' => [
                'label' => 'Titre',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_pimpmaskexport_title,tx_pimpmaskexport_quote,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
    'pimpmaskexport_ma_dmarche' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,tx_pimpmaskexport_demarche,tx_pimpmaskexport_image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
    'pimpmaskexport_map' => [
        'columnsOverrides' => [
            'tx_pimpmaskexport_adress' => [
                'label' => 'Adresse',
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_pimpmaskexport_adress,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
    'pimpmaskexport_mes_ralisations' => [
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_pimpmaskexport_category,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, tx_content_animation,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, image_shadow, image_rounded',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'pimp_mask_export',
    'Configuration/TypoScript/',
    'pimp_mask_export'
);

});

