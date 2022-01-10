<?php

// Prevent script from being called directly
defined('TYPO3') or die();

call_user_func(function(){
   
$extensionKey = 'theme_blanc';

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extensionKey,
    'Configuration/TypoScript',
    'White theme configuration'
  );
});
