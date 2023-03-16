<?php

// Prevent script from being called directly
defined('TYPO3') or die();

//$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:theme_educcanine/Configuration/RTE/rte.yaml';

// Add color to page tree.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
  options.pageTree.backgroundColor.24 = rgba(53,152,219,0.2)
');
