<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SL creation theme',
    'description' => 'SL cretation theme',
    'category' => 'templates',
    'author' => 'Thomas Beck',
    'author_email' => 'contact@thomas-beck.fr',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.99.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'Thbck\\ThemeSlcreation\\' => 'Classes'
        ]
    ],
];
