<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/openCodeProject/grav-site-language/user/config/system.yaml',
    'modified' => 1793130140,
    'size' => 400,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'timezone' => 'Europe/Moscow',
        'pages' => [
            'theme' => 'albion'
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ]
        ],
        'assets' => [
            'css_pipeline' => true,
            'js_pipeline' => true,
            'enable_asset_timestamp' => true
        ],
        'errors' => [
            'display' => false,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'provider' => 'clockwork'
        ],
        'gpm' => [
            'releases' => 'stable',
            'verify_peer' => true
        ],
        'updates' => [
            'safe_upgrade' => true,
            'safe_upgrade_snapshot_limit' => 5
        ]
    ]
];
