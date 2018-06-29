<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'lime-frontend',
    'basePath' => dirname(__DIR__),

    /**
     * Bootstrap configuration
     */
    'bootstrap' => [
        'log',
    ],

    'controllerNamespace' => 'frontend\controllers',

    /**
     * Framework components configuration
     */
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],

        'user' => [
            'identityClass' => common\models\User::class,
            'enableAutoLogin' => true,
            'loginUrl' => ['/user/login'],
            'identityCookie' => [
                'name' => '_identity-frontend',
                'httpOnly' => true
            ],
        ],

        'session' => [
            'name' => 'lime-frontend',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,

            'rules' => [
                '/home' => '/site/index',
            ],
        ],
    ],

    'params' => $params,
];
