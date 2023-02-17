<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pimpmaskexport_category, tx_pimpmaskexport_icontext, tx_pimpmaskexport_texts');

});

