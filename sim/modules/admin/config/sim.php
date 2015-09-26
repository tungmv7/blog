<?php
return [
    'aliases' => [
        '@sim' => dirname(dirname(dirname(__DIR__)))
    ],
    'modules' => [
        'redactor' => 'yii\redactor\RedactorModule',
    ],
    'components' => [
        'view' => [
            'theme' => [
                'basePath' => '@sim/themes/basic',
                'pathMap' => [
                    '@sim/modules/post/views/layouts' => '@sim/themes/basic/modules/views/layouts',
                ]
            ]
        ]
    ]
];