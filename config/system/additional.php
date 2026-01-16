<?php

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(TYPO3\CMS\Core\Core\Environment::getProjectPath());
$dotenv->load();

switch (\TYPO3\CMS\Core\Core\Environment::getContext()) {
    case 'Development':
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => 'db',
                        'driver' => 'mysqli',
                        'host' => 'db',
                        'password' => 'db',
                        'port' => '3306',
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
            // This mail configuration sends all emails to mailpit
            'MAIL' => [
                'transport' => 'smtp',
                'transport_smtp_encrypt' => false,
                'transport_smtp_server' => 'localhost:1025',
            ],
            'SYS' => [
                'trustedHostsPattern' => '.*.*',
                'devIPmask' => '*',
                'displayErrors' => 1,
            ],
        ]
    );
    break;

  case 'Production':
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => getenv('TYPO3_DB_USER'),
                        'driver' => 'mysqli',
                        'host' => getenv('TYPO3_DB_HOST'),
                        'password' => getenv('TYPO3_DB_PASSWORD'),
                        'port' => '3306',
                        'user' => getenv('TYPO3_DB_NAME'),
                    ],
                ],
            ],
            'SYS' => [
                'devIPmask' => '',
                'displayErrors' => 0,
                'exceptionalErrors' => 12290,
                'enableDeprecationLog' => 0,
                'syslogErrorReporting' => 0,
                'belogErrorReporting' => 0,
                'belogErrorReporting' => 0,
                'sqlDebug' => 0,
                'no_pconnect' => 1,
            ],
            'BE' => [
                'DEBUG' => false
            ],
            'FE' => [
                'DEBUG' => false
            ],
            'LOG' => [
                'TYPO3' => [
                    'CMS' => [
                        'deprecations' => [
                            'writerConfiguration' => [
                                'notice' => [
                                    'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                        'disabled' => true
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
        ]
    );
}

if(isset($_SERVER['HTTP_HOST'])) {
    switch (fixDomainName($_SERVER['HTTP_HOST'])) {
      case 'sl-creations.net':
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
          'loginBackgroundImage' => 'fileadmin/slcreation/accueil1.jpg',
          'loginLogo' => 'EXT:theme_slcreation/Resources/Public/assets/images/logo.png',
          'loginHighlightColor' => '#66c6de',
        ];
        break;
      case 'dev.pimpebenisterie.fr':
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
          'loginBackgroundImage' => 'fileadmin/pimp/image_home.png',
          'loginLogo' => 'EXT:theme_pimp/Resources/Public/assets/images/logo.png',
          'loginHighlightColor' => '#76b82a',
        ];
        break;
        case 'educ-canine.com':
            $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
                'loginBackgroundImage' => 'fileadmin/educcanine/education-canine__accueil.jpg',
                'loginLogo' => 'EXT:theme_educcanine/Resources/Public/assets/images/logo.png',
                'loginHighlightColor' => '#df046f',
            ];
        break;
        case 'thomas-beck.fr':
            $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend'] = [
                'loginLogo' => 'EXT:theme_thomasbeck/Resources/Public/assets/images/logo.png',
                'loginHighlightColor' => '#ff8c5c',
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
