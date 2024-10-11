<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Default package for all websites',
    'description' => 'Default configuration for all websites',
    'category' => 'templates',
    'author' => 'Thomas Beck',
    'author_email' => 'contact@thomas-beck.fr',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.99.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'Thbck\\ThemePackage\\' => 'Classes'
        ]
    ],
];
