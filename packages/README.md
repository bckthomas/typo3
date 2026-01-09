# Composer.json

Modifier name
Modifier description
Modifier autoload > psr-4
Modifier extension-key

# ext_emconf.php
title
description
autoload > psr-4

# ext_localconf.php
Modifier RTE Presets


Install new theme : composer require thbck/theme-thomasbeck:@dev

npm run build --site=thomasbeck

Ajouter au composer.json
"repositories": [
    {
        "type": "path",
        "url": "./packages/*"
    }
]

# Create new block content
`ddev typo3 make:content-block`

Please run the following commands now and every time you change the EditorInterface.yaml file.
Alternatively, flush the system cache in the backend and run the Database Analyzer.
ddev typo3 cache:flush -g system
ddev typo3 extension:setup --extension=theme_
