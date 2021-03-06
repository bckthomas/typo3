<?php
return [
    'BE' => [
        'compressionLevel' => '5',
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
                'port' => '3306',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'fr',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => 'fileadmin/slcreation/accueil1.jpg',
            'loginFootnote' => '',
            'loginHighlightColor' => '#66c6de',
            'loginLogo' => 'EXT:theme_slcreation/Resources/Public/Images/logo.png',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'extractor' => [
            'enable_php' => '1',
            'enable_tika' => '0',
            'enable_tools_exiftool' => '0',
            'enable_tools_pdfinfo' => '0',
            'mapping_base_directory' => 'EXT:extractor/Configuration/Services/',
            'mapping_configuration' => '',
            'tika_jar_path' => '',
            'tika_mode' => 'jar',
            'tika_server_host' => '',
            'tika_server_port' => '9998',
            'tools_exiftool' => '',
            'tools_pdfinfo' => '',
        ],
        'fs_media_gallery' => [
            'allowedActionsInFlexforms' => 'nestedList,flatList,showAlbumByParam,showAlbumByConfig,randomAsset',
            'asset' => [
                'orderOptions' => 'name,crdate,title,content_creation_date,content_modification_date',
            ],
            'clearCacheAfterFileChange' => '',
            'enableAutoCreateFileCollection' => '1',
            'list' => [
                'orderOptions' => 'datetime,crdate,sorting',
            ],
        ],
        'mask' => [
            'backend' => 'EXT:theme_slcreation/Resources/Private/Mask/Backend/Templates',
            'backend_layouts_folder' => '',
            'backendlayout_pids' => '0',
            'content' => 'EXT:theme_slcreation/Resources/Private/Mask/Frontend/Templates',
            'content_elements_folder' => '',
            'json' => 'EXT:theme_slcreation/Configuration/Mask/mask.json',
            'layouts' => 'EXT:theme_slcreation/Resources/Private/Mask/Frontend/Layouts',
            'layouts_backend' => 'EXT:theme_slcreation/Resources/Private/Mask/Backend/Layouts',
            'loader_identifier' => 'json',
            'partials' => 'EXT:theme_slcreation/Resources/Private/Mask/Frontend/Partials',
            'partials_backend' => 'EXT:theme_slcreation/Resources/Private/Mask/Backend/Partials',
            'preview' => 'EXT:theme_slcreation/Resources/Public/Mask/',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        'staticfilecache' => [
            'backendDisplayMode' => 'both',
            'boostMode' => '0',
            'cacheTagsEnable' => '0',
            'clearCacheForAllDomains' => '1',
            'debugHeaders' => '0',
            'disableInDevelopment' => '0',
            'enableGeneratorBrotli' => '0',
            'enableGeneratorGzip' => '1',
            'enableGeneratorManifest' => '0',
            'enableGeneratorPlain' => '0',
            'hashUriInCache' => '0',
            'htaccessTemplateName' => 'EXT:staticfilecache/Resources/Private/Templates/Htaccess.html',
            'overrideCacheDirectory' => '',
            'rawurldecodeCacheFileName' => '0',
            'renameTablesToOtherPrefix' => '0',
            'sendCacheControlHeaderRedirectAfterCacheTimeout' => '0',
            'sendHttp2PushEnable' => '0',
            'sendHttp2PushFileExtensions' => 'css,js',
            'sendHttp2PushFileLimit' => '10',
            'sendHttp2PushLimitToArea' => '',
            'useFallbackMiddleware' => '1',
            'useReverseUriLengthInPriority' => '1',
            'validHtaccessHeaders' => 'Content-Type,Content-Language,Link,X-SFC-Tags',
        ],
    ],
    'FE' => [
        'compressionLevel' => 5,
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'jpg_quality' => 90,
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
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
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '979af7199ddd7055e056ee2bcd4ec3884bf410c5754b3859b9704382d011e8f75ac4255c530ccc26f7c6f5a5b712aaf3',
        'exceptionalErrors' => 4096,
        'features' => [
            'unifiedPageTranslationHandling' => true,
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'TYPO3 Projects',
        'systemMaintainers' => [
            1,
        ],
    ],
];
