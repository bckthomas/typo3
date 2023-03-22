<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_ecmaskexport_3_cols_couleurs',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:ec_mask_export/Resources/Public/Icons/Content/3_cols_couleurs.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_ecmaskexport_3_cols_pleine_largeur',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:ec_mask_export/Resources/Public/Icons/Content/3_cols_pleine_largeur.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_ecmaskexport_formes',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:ec_mask_export/Resources/Public/Icons/Content/formes.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_ecmaskexport_prix',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:ec_mask_export/Resources/Public/Icons/Content/prix.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_ecmaskexport_squares',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:ec_mask_export/Resources/Public/Icons/Content/squares.svg',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ec_mask_export/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ec_mask_export/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['ec_mask_export'] = 
    EcMaskExport\EcMaskExport\Hooks\PageLayoutViewDrawItem::class;

});

