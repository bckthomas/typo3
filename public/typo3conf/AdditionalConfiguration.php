<?php

switch (\TYPO3\CMS\Core\Core\Environment::getContext()) {
  case 'Development':
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
      $GLOBALS['TYPO3_CONF_VARS'],
        [
          'DB' => [
              'Connections' => [
                  'Default' => [
                      'dbname' => 'db',
                      'host' => 'ddev-kwible-db',
                      'password' => 'db',
                      'user' => 'db',
                  ],
              ],
          ],
          // This GFX configuration allows processing by installed ImageMagick 6
          'GFX' => [
              'processor' => 'ImageMagick',
              'processor_path' => '/usr/bin/',
              'processor_path_lzw' => '/usr/bin/',
          ],
          // This mail configuration sends all emails to mailhog
          'MAIL' => [
              'transport' => 'smtp',
              'transport_smtp_server' => 'localhost:1025',
          ],
          'SYS' => [
              'trustedHostsPattern' => '.*.*',
              'devIPmask' => '*',
              'displayErrors' => 1,
              'exceptionalErrors' => '12290',
          ],
          'BE' => [
              'debug' => true,
          ],
          'FE' => [
              'debug' => true,
          ],
          'LOG' => [
              'TYPO3' => [
                  'CMS' => [
                      'deprecations' => [
                          'writerConfiguration' => [
                              'notice' => [
                                  'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                      'disabled' => false,
                                  ],
                              ],
                          ],
                      ],
                  ],
              ],
          ],
        ]
    );

    if(file_exists(dirname(__FILE__).'./productionDatabase.php')){
        require_once(dirname(__FILE__).'./productionDatabase.php');
    }

    break;

  case 'Production':
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
          'BE' => [
            'versionNumberInFilename' => '1',
            'debug' => false,
          ],
          'FE' => [
              'debug' => false,
          ],
          'LOG' => [
            'TYPO3' => [
              'CMS' => [
                'deprecations' => [
                  'writerConfiguration' => [
                    'notice' => [
                      'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                        'disabled' => true,
                      ],
                    ],
                  ],
                ],
              ],
            ],
          ],
          'SYS' => [
            'devIPmask' => '',
            'displayErrors' => 0,
            'exceptionalErrors' => '12290',
            'enableDeprecationLog' => '0',
            'syslogErrorReporting' => '0',
            'belogErrorReporting' => '0',
            'sqlDebug' => '0',
            'no_pconnect' => '1',
          ],
        ]
    );
    if(file_exists(dirname(__FILE__).'./productionDatabase.php')){
        require_once(dirname(__FILE__).'./productionDatabase.php');
    }
    break;
}
