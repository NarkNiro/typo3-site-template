# TYPO3 Site Template

## Description

This is my own TYPO3 site template to make faster a project to Bootstrap.

## Install Steps

1. Install Project over composer

```shell
composer create-project narkniro/typo3-site-template
```

2. Copy .env-example .env

```shell
copy .env-example .env
```

3. Generator encryption key and fill the .env

```shell
./bin/generate-entcript-key
```

5. Generator the install tool password and fill the .env

```shell
./bin/generate-install-password string
```

6. Start the docker ddev system

```shell
ddev start
```

7. Execute the composer install:full in ddev

```shell
ddev composer install:full
```
