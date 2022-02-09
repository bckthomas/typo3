<?php

switch (\TYPO3\CMS\Core\Core\Environment::getContext()) {
  case 'Development':
    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['user'] = 'db';
    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password'] = 'db';
    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['host'] = 'ddev-kwible-db';
    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['dbname'] = 'db';

    $GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'ImageMagick';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path'] = '/usr/bin/';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path_lzw'] = '/usr/bin/';

    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'smtp';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'localhost:1025';

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern'] = '.*';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '*';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '1';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = '12290';

    $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = true;

    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = true;

    $GLOBALS['TYPO3_CONF_VARS']['LOG']['TYPO3']['CMS']['deprecations']['writerConfiguration']['notice']['TYPO3\CMS\Core\Log\Writer\FileWriter']['disabled'] = false;

    if(file_exists(dirname(__FILE__).'/productionDatabase.php')){
      require_once(dirname(__FILE__).'/productionDatabase.php');
    }

    break;

  case 'Production':

    $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = false;

    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = false;

    $GLOBALS['TYPO3_CONF_VARS']['LOG']['TYPO3']['CMS']['deprecations']['writerConfiguration']['notice']['TYPO3\CMS\Core\Log\Writer\FileWriter']['disabled'] = true;

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = 0;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = '12290';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['syslogErrorReporting'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['belogErrorReporting'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['no_pconnect'] = '1';

    if(file_exists(dirname(__FILE__).'/productionDatabase.php')){
        require_once(dirname(__FILE__).'/productionDatabase.php');
    }
    break;
}
