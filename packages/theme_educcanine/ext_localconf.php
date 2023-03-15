<?php

// Prevent script from being called directly
defined('TYPO3') or die();

//$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:theme_slcreation/Configuration/RTE/rte.yaml';

// Add color to page tree.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
  options.pageTree.backgroundColor.1 = rgba(118,184,42,0.2)
');
