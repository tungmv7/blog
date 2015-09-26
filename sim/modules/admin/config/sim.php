<?php
return [
    'aliases' => [
        '@sim' => dirname(dirname(dirname(__DIR__)))
    ],
    'modules' => [
//        'admin' => [
//            'class' => '\sim\modules\admin\Module'
//        ]
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