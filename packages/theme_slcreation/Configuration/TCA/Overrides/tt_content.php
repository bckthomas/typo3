<?php
defined('TYPO3') or die();

// Add some fields to tt_content table to show TCA fields definitions
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',
   [
      'image_shadow' => [
         'exclude' => 0,
         'label' => 'LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.image_shadow',
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
         'label' => 'LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.image_rounded',
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
      'tx_content_animation' => [
         'exclude' => true,
         'label' => 'LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.animations',
         'config' => [
             'items' => [
                 ['LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.no-animation', ''],
                 ['LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.fade-animations', '--div--'],
                 ['LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.fade-in', 'fade-in'],
                 ['LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.fade-in-bottom', 'fade-in-bottom'],
                 ['LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.slide-animations', '--div--'],
                 ['LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.slide-in-left', 'slide-in-left'],
                 ['LLL:EXT:theme_slcreation/Resources/Private/Language/locallang.xlf:tt_content.slide-in-right', 'slide-in-right'],
             ],
             'renderType' => 'selectSingle',
             'type' => 'select',
             'size' => 1,
         ],
     ],
   ],
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
   'tt_content',
   'image_shadow, image_rounded',
   '',
   'after:imageborder'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  'tx_content_animation',
  '',
  'after:layout'
);
