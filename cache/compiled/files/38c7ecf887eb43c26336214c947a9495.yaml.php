<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/openCodeProject/grav-site-language/user/themes/albion/blueprints/item.yaml',
    'modified' => 1793129446,
    'size' => 465,
    'data' => [
        'title' => 'Blog post',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'article' => [
                            'type' => 'tab',
                            'title' => 'Article',
                            'fields' => [
                                'header.lead' => [
                                    'type' => 'textarea',
                                    'rows' => 3,
                                    'label' => 'Lead'
                                ],
                                'header.takeaways' => [
                                    'type' => 'list',
                                    'label' => 'Key takeaways',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Point'
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
