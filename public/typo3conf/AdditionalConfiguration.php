<?php

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(TYPO3\CMS\Core\Core\Environment::getProjectPath());
$dotenv->load();

$GLOBALS['TYPO3_CONF_VARS']['BE']['installToolPassword'] = getenv('TYPO3_BE_INSTALLTOOLPASSWORD');

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

    // To connect to prod database. To delete after MEP
    // $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['host'] = getenv('TYPO3_DB_REMOTE_HOST');

    break;

  case 'Production':

    $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = false;

    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = false;

    $GLOBALS['TYPO3_CONF_VARS']['LOG']['TYPO3']['CMS']['deprecations']['writerConfiguration']['notice']['TYPO3\CMS\Core\Log\Writer\FileWriter']['disabled'] = true;

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = '12290';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['syslogErrorReporting'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['belogErrorReporting'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = '0';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['no_pconnect'] = '1';

    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['host'] = getenv('TYPO3_DB_HOST');
    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['user'] = getenv('TYPO3_DB_NAME');
    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['dbname'] = getenv('TYPO3_DB_USER');
    $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password'] = getenv('TYPO3_DB_PASSWORD');

    break;
}

if(isset($_SERVER['HTTP_HOST'])) {
  switch (fixDomainName($_SERVER['HTTP_HOST'])) {
    case 'sl-creations.net':
      $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
        'loginBackgroundImage' => 'fileadmin/slcreation/accueil1.jpg',
        'loginLogo' => 'EXT:theme_slcreation/Resources/Public/Images/logo.png',
        'loginHighlightColor' => '#66c6de',
      ];
      break;
    case 'dev.pimpebenisterie.fr':
      $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
        'loginBackgroundImage' => 'fileadmin/pimp/image_home.png',
        'loginLogo' => 'EXT:theme_pimp/Resources/Public/Images/logo.png',
        'loginHighlightColor' => '#76b82a',
      ];
      break;
      case 'educ-canine.com':
          $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
              'loginBackgroundImage' => 'fileadmin/educcanine/education-canine__accueil.jpg',
              'loginLogo' => 'EXT:theme_educanine/Resources/Public/Images/logo.png',
              'loginHighlightColor' => '#df046f',
          ];
          break;
  }
}

function fixDomainName($url='') {
    $strToLower = strtolower(trim($url));
    $httpPregReplace = preg_replace('/^http:\/\//i', '', $strToLower);
    $httpsPregReplace = preg_replace('/^https:\/\//i', '', $httpPregReplace);
    $wwwPregReplace = preg_replace('/^www\./i', '', $httpsPregReplace);
    $explodeToArray = explode('/', $wwwPregReplace);
    $finalDomainName = trim($explodeToArray[0]);
    return $finalDomainName;
}

