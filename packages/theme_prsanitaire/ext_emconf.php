<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'PR Sanitaire theme',
    'description' => 'Pr Sanitaire theme',
    'category' => 'templates',
    'author' => 'Thomas Beck',
    'author_email' => 'contact@thomas-beck.fr',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.99.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'Thbck\\ThemePrsanitaire\\' => 'Classes'
        ]
    ],
];
