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
  ->setIcon('EXT:theme_package/Resources/Public/Icons/container-5050.svg')
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
    ->setIcon('EXT:theme_package/Resources/Public/Icons/container-333333.svg')
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
    ->setIcon('EXT:theme_package/Resources/Public/Icons/container-25252525.svg')
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
    ->setIcon('EXT:theme_package/Resources/Public/Icons/container-2575.svg')
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
    ->setIcon('EXT:theme_package/Resources/Public/Icons/container-7525.svg')
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


$GLOBALS['TCA']['tt_content']['columns']['header_layout']['label'] = 'LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size';
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['1'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size1','1');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['2'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size2','2');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['3'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size3','3');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['4'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size4','4');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['5'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size5','5');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['6'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_size6','6');
$GLOBALS['TCA']['tt_content']['columns']['header_layout']['config']['items']['7'] = array('LLL:EXT:theme_package/Resources/Private/Language/locallang.xlf:tt_content.title_hidden','100');
