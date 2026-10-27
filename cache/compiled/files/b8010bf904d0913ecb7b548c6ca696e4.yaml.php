<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/openCodeProject/grav-site-language/user/config/plugins/email.yaml',
    'modified' => 1793128171,
    'size' => 319,
    'data' => [
        'enabled' => true,
        'from' => 'site@annabelova.ru',
        'from_name' => 'Сайт Анны Беловой',
        'to' => 'hello@annabelova.ru',
        'to_name' => 'Анна Белова',
        'content_type' => 'text/html',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.yandex.ru',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'site@annabelova.ru',
                'password' => 'CHANGE_ME'
            ]
        ]
    ]
];
