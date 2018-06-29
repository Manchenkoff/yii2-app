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
    'id' => 'lime-backend',
    'charset' => 'utf-8',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',

    /**
     * Bootstrap configuration
     */
    'bootstrap' => [
        'log',
    ],

    /**
     * Addittional modules configuration
     */
    'modules' => [],

    /**
     * Redirect guests to auth page
     */
    'as beforeRequest' => [
        'class' => \yii\filters\AccessControl::class,
        'rules' => [
            [
                'allow' => true,
                'controllers' => ['site'],
                'actions' => ['error'],
            ],
            [
                'allow' => true,
                'controllers' => ['auth'],
                'roles' => ['?'],
            ],
            [
                'allow' => false,
                'roles' => ['?'],
            ],
            [
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
        'denyCallback' => function () {
            return Yii::$app->response->redirect(['/auth/login']);
        }
    ],

    /**
     * Framework components configuration
     */
    'components' => [
        'request' => [
            'baseUrl' => '/backend',
            'csrfParam' => '_csrf-backend',
            'csrfCookie' => [
                'httpOnly' => true,
                'path' => '/backend',
            ],
        ],

        'user' => [
            'identityClass' => common\models\User::class,
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-backend',
                'httpOnly' => true,
                'path' => '/backend',
            ],
            'loginUrl' => ['auth/login'],
        ],

        'session' => [
            'name' => 'lime-backend',
            'cookieParams' => [
                'path' => '/backend',
            ],
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
                '/dash' => '/site/index',
            ],
        ],

        'urlManagerFrontend' => [
            'baseUrl' => '/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => \yii\web\UrlManager::class,
        ],

    ],
    'params' => $params,
];
