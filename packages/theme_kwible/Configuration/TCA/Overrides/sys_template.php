<?php

// Prevent script from being called directly
defined('TYPO3') or die();

call_user_func(function(){

$extensionKey = 'theme_kwible';

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extensionKey,
    'Configuration/TypoScript',
    'Kwible theme configuration'
  );
});
