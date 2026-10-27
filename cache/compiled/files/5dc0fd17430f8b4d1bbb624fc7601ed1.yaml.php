<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/openCodeProject/grav-site-language/user/themes/albion/blueprints.yaml',
    'modified' => 1793127611,
    'size' => 720,
    'data' => [
        'name' => 'Albion',
        'slug' => 'albion',
        'type' => 'theme',
        'version' => '1.0.0',
        'description' => 'An editorial theme for a private English teacher and exam tutor. Warm paper, ink, oxblood and brass.',
        'icon' => 'book-open',
        'author' => [
            'name' => 'Anna Belova Studio',
            'email' => 'hello@annabelova.ru'
        ],
        'homepage' => 'https://annabelova.ru',
        'keywords' => 'education, english, tutor, exam, editorial, seo, accessible',
        'license' => 'MIT',
        'compatibility' => [
            'grav' => [
                0 => '2.0'
            ]
        ],
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=2.0.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'theme_note' => [
                    'type' => 'display',
                    'markdown' => true,
                    'content' => 'All site details — contacts, social links and prices — live in <code>user/config/site.yaml</code> and the page files. This theme has no required settings.'
                ]
            ]
        ]
    ]
];
