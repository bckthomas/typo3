# TYPO3 CMS Base Distribution

Get going quickly with TYPO3 CMS.

## Prerequisites

[ddev](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/#windows)

## Quickstart

* `ddev config`
* Give a name and select typo3 project
* `ddev composer install`
* In .ddev/config.yaml set line 3 `docroot: "public"` and set web environement to develop : 
  `web_environment:
    - TYPO3_CONTEXT=Development`

### Development server

To start your dev environement execute

* `ddev start`
* open your browser at "http://[PROJECTNAME]].ddev.site" or "http://127.0.0.1:32769"

## License

GPL-2.0 or later

## Create new block content
`ddev exec vendor/bin/typo3 make:content-block`

Please run the following commands now and every time you change the EditorInterface.yaml file.
Alternatively, flush the system cache in the backend and run the Database Analyzer.
vendor/bin/typo3 cache:flush -g system
vendor/bin/typo3 extension:setup --extension=theme_educcanine