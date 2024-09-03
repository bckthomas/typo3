<?php

// Prevent script from being called directly
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'theme_kwible',
    'Configuration/PageTSconfig/config.tsconfig',
    'EXT:theme_kwible Tsconfig'
);
