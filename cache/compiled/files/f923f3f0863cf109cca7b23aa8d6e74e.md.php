<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/openCodeProject/grav-site-language/user/pages/01.home/modular.md',
    'modified' => 1793129955,
    'size' => 528,
    'data' => [
        'header' => [
            'title' => 'Анна Белова — преподаватель английского языка',
            'menu' => 'Главная',
            'metadata' => [
                'description' => 'Анна Белова — преподаватель английского языка в Москве и онлайн. Подготовка к ЕГЭ, ОГЭ, IELTS и TOEFL, бизнес-английский и разговорная практика.',
                'robots' => 'index, follow, max-image-preview:large'
            ],
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: \'Анна Белова — преподаватель английского языка\'
menu: Главная
metadata:
  description: \'Анна Белова — преподаватель английского языка в Москве и онлайн. Подготовка к ЕГЭ, ОГЭ, IELTS и TOEFL, бизнес-английский и разговорная практика.\'
  robots: \'index, follow, max-image-preview:large\'
content:
  items: \'@self.modular\'
  order:
    by: folder
    dir: asc',
        'markdown' => ''
    ]
];
