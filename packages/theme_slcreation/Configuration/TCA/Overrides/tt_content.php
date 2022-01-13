<?php
defined('TYPO3') or die();

// Add some fields to fe_users table to show TCA fields definitions
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',
   [
      'image_shadow' => [
         'exclude' => 0,
         'label' => 'LLL:EXT:theme_slcreation/Resources/Private/Language/locallang_db.xlf:tt_content.image_shadow',
         'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => '0',
            'items' => [
               [
                  0 => '',
                  1 => ''
               ]
            ],
         ],
      ],
      'image_rounded' => [
         'exclude' => 0,
         'label' => 'LLL:EXT:theme_slcreation/Resources/Private/Language/locallang_db.xlf:tt_content.image_rounded',
         'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
               [
                  0 => '',
                  1 => ''
               ]
            ],
         ],
      ],
   ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
   'tt_content',
   'image_shadow, image_rounded',
   '',
   'after:imageborder'
);
