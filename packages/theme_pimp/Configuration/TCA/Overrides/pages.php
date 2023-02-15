<?php

// Prevent script from being called directly
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'theme_pimp',
    'Configuration/PageTSconfig/config.tsconfig',
    'EXT:theme_pimp Tsconfig'
);
