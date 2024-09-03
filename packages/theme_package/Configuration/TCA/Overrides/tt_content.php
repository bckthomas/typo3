<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
  (
      new \B13\Container\Tca\ContainerConfiguration(
          'container-5050',
          'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.5050.label',
          'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.5050.description',
          [
              [
                  ['name' => 'Column', 'colPos' => 101],
                  ['name' => 'Column', 'colPos' => 102]
              ]
          ]
      )
  )
  ->setIcon('typo3conf/ext/theme_package/Resources/Private/Icons/container-5050.svg')
  ->setSaveAndCloseInNewContentElementWizard(false)
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-333333',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.333333.label',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.333333.description',
            [
                [
                    ['name' => 'Column', 'colPos' => 101],
                    ['name' => 'Column', 'colPos' => 102],
                    ['name' => 'Column', 'colPos' => 103]
                ]
            ]
        )
    )
    ->setIcon('typo3conf/ext/theme_package/Resources/Private/Icons/container-333333.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-25252525',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.25252525.label',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.25252525.description',
            [
                [
                    ['name' => 'Column', 'colPos' => 101],
                    ['name' => 'Column', 'colPos' => 102],
                    ['name' => 'Column', 'colPos' => 103],
                    ['name' => 'Column', 'colPos' => 104]
                ]
            ]
        )
    )
    ->setIcon('typo3conf/ext/theme_package/Resources/Private/Icons/container-25252525.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-2575',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.2575.label',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.2575.description',
            [
                [
                    ['name' => 'Column', 'colPos' => 101],
                    ['name' => 'Column', 'colPos' => 102]
                ]
            ]
        )
    )
    ->setIcon('typo3conf/ext/theme_package/Resources/Private/Icons/container-2575.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'container-7525',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.7525.label',
            'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.7525.description',
            [
                [
                    ['name' => 'Column', 'colPos' => 101],
                    ['name' => 'Column', 'colPos' => 102]
                ]
            ]
        )
    )
    ->setIcon('typo3conf/ext/theme_package/Resources/Private/Icons/container-7525.svg')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'container-6633',
        'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.6633.label',
        'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:container.6633.description',
        [
            [
                ['name' => 'Column', 'colPos' => 101],
                ['name' => 'Column', 'colPos' => 102]
            ]
        ]
    )
    )
        ->setIcon('typo3conf/ext/theme_package/Resources/Private/Icons/container-6633.svg')
);

$GLOBALS['TCA']['tt_content']['types']['container-5050']['showitem'] = str_replace(
    'header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,',
    'header;Title (shown in special cases only),header_layout,
    tx_containeritems_classes,',
    $GLOBALS['TCA']['tt_content']['types']['container-5050']['showitem']
);

$GLOBALS['TCA']['tt_content']['types']['container-333333']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['container-5050']['showitem'];
$GLOBALS['TCA']['tt_content']['types']['container-25252525']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['container-5050']['showitem'];
$GLOBALS['TCA']['tt_content']['types']['container-2575']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['container-5050']['showitem'];
$GLOBALS['TCA']['tt_content']['types']['container-7525']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['container-5050']['showitem'];
$GLOBALS['TCA']['tt_content']['types']['container-6633']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['container-5050']['showitem'];

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
   'after:image_zoom'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  'tx_content_animation',
  '',
  'after:layout'
);


$GLOBALS['TCA']['tt_content']['columns']['header_layout']['label'] = 'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size';
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['1'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size1','1');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['2'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size2','2');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['3'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size3','3');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['4'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size4','4');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['5'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size5','5');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['6'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size6','6');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['7'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_hidden','100');
