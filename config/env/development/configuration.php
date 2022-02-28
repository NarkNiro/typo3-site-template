<?php declare(strict_types = 1);

return (static function() {
    return [
        'BE' => [
            'debug' => 1,
        ],
        'DB' => [
            'Connections' => [
                'Default' => [
                    'charset' => 'utf8mb4',
                    'dbname' => 'db',
                    'driver' => 'mysqli',
                    'host' => 'db',
                    'password' => 'db',
                    'port' => 3306,
                    'tableoptions' => [
                        'charset' => 'utf8mb4',
                        'collate' => 'utf8mb4_unicode_ci',
                    ],
                    'user' => 'db',
                ],
            ],
        ],
        // Log configuration should perhaps be configured in a separate file
        'LOG' => [
            'TYPO3' => [
                'CMS' => [
                    'deprecations' => [
                        'writerConfiguration' => [
                            5 => [
                                'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                    'disabled' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FE' => [
            'debug' => true,
        ],
        'GFX' => [
            'processor' => 'ImageMagick',
            'processor_path' => '/usr/bin/',
            'processor_path_lzw' => '/usr/bin/',
        ],
        'MAIL' => [
            'transport' => 'smtp',
            'transport_smtp_server' => 'localhost:1025',
        ],
        'SYS' => [
            'displayErrors' => true,
            'caching' => [
                'cacheConfigurations' => [
                    'l10n' => [
                        'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
                    ],
                ],
            ],
            'trustedHostsPattern' => '.*.*',
            'devIPmask' => '*',
            'sitename' =>  sprintf('DEV %s', getenv('SITENAME'))
        ],
    ];
})();
