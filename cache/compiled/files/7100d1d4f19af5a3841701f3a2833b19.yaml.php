<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/openCodeProject/grav-site-language/user/themes/albion/blueprints/blog.yaml',
    'modified' => 1793129446,
    'size' => 968,
    'data' => [
        'title' => 'Blog page',
        '@extends' => 'default',
        'child_type' => 'item',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'hero' => [
                            'type' => 'tab',
                            'title' => 'Page header',
                            'fields' => [
                                'header.hero_eyebrow' => [
                                    'type' => 'text',
                                    'label' => 'Eyebrow'
                                ],
                                'header.hero_heading' => [
                                    'type' => 'textarea',
                                    'rows' => 2,
                                    'label' => 'Heading',
                                    'help' => 'HTML allowed: use <em>текст</em> for the oxblood italic accent.'
                                ],
                                'header.hero_lead' => [
                                    'type' => 'textarea',
                                    'rows' => 3,
                                    'label' => 'Lead'
                                ],
                                'header.hero_meta' => [
                                    'type' => 'list',
                                    'label' => 'Meta items',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text'
                                        ]
                                    ]
                                ],
                                'header.topics' => [
                                    'type' => 'list',
                                    'label' => 'Topics',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Topic'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
