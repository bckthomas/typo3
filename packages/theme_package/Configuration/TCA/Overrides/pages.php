<?php

// Prevent script from being called directly
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'theme_package',
    'Configuration/PageTSconfig/base.tsconfig',
    'EXT:theme_package : Configuration de base');

    