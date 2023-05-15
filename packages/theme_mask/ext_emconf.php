<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Mask theme',
    'description' => 'Mask theme',
    'category' => 'templates',
    'author' => 'Thomas Beck',
    'author_email' => 'contact@thomas-beck.fr',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.99.99',
            'mask' => '8.0.0-9.0.0'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'Thbck\\ThemeMask\\' => 'Classes'
        ]
    ],
];
