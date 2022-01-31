<?php

return (static function() {
    return [
        'BE' => [
            'installToolPassword' => getenv('INSTALL_PASSWORD'),
        ],
        'EXTENSIONS' => [
            'backend' => [
                'loginBackgroundImage' => '',
                // Source specification for the login backend image
                'loginFootnote' => '',
                'loginHighlightColor' => '',
                'loginLogo' => '',
            ],
        ],
        'SYS' => [
            'encryptionKey' => getenv('ENCRYPTION_KEY'),
            'sitename' => getenv('SITENAME')
        ],
    ];
})();
