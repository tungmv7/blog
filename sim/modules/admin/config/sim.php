<?php
return [
    'aliases' => [
        '@sim' => dirname(dirname(dirname(__DIR__)))
    ],
    'modules' => [
        'admin' => [
            'class' => '\sim\modules\admin\Module'
        ]
    ]
];