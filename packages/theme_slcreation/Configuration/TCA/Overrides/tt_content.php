<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content', // table
    'CType', // typeField
    'slcreation', // group
    'SL Création', // label
    'after:default', // position
);