<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ecmaskexport_squares');

});

