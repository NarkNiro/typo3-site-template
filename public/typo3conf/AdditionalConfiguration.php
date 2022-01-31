<?php

(function() {
    $logBasePath = dirname(__DIR__, 2) . '/var/log';

    \TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'LOG' => [
                'writerConfiguration' => [
                    \TYPO3\CMS\Core\Log\LogLevel::WARNING => [
                        \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
                            'logFile' => $logBasePath . '/typo3.log',
                        ],
                    ],
                ],
            ],
        ]
    );

    /**
     * This loads a context-specific configuration file from the config/ folder. This mechanism should be used instead of
     * manual checks against the environment in this file.
     */
    $context = getenv('TYPO3_CONTEXT');
    $confDir = dirname(__DIR__, 2) . '/config/env';
    [$contextDirectoryName, ] = explode('/', $context);

    $configurationReaderFactory = new \Helhum\ConfigLoader\ConfigurationReaderFactory($confDir);
    $configLoader = new \Helhum\ConfigLoader\ConfigurationLoader(
        [
            $configurationReaderFactory->createReader( 'configuration.php'),
            $configurationReaderFactory->createReader( strtolower($contextDirectoryName) . '/configuration.php')
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        $configLoader->load()
    );
})();
