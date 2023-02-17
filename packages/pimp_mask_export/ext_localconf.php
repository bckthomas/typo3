<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_pimpmaskexport_accueil__image_plein_cran',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:pimp_mask_export/Resources/Public/Icons/Content/accueil__image_plein_cran.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_pimpmaskexport_citation',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:pimp_mask_export/Resources/Public/Icons/Content/citation.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_pimpmaskexport_ma_dmarche',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:pimp_mask_export/Resources/Public/Icons/Content/ma_dmarche.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_pimpmaskexport_map',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:pimp_mask_export/Resources/Public/Icons/Content/map.svg',
    ]
);
$iconRegistry->registerIcon(
    'tx_pimpmaskexport_mes_ralisations',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:pimp_mask_export/Resources/Public/Icons/Content/mes_ralisations.svg',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pimp_mask_export/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pimp_mask_export/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['pimp_mask_export'] = 
    PimpMaskExport\PimpMaskExport\Hooks\PageLayoutViewDrawItem::class;

});

