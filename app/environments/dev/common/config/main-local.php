<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

$config = [
    'components' => [

        'db' => [
            'class' => yii\db\Connection::class,

            // MySQL
            'dsn' => 'mysql:host=localhost;dbname=DATABASE_NAME',

            // SQLite
            // 'dsn' => 'sqlite:@common/database.sqlite',

            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix' => 'PREFIX_',
        ],

        'mailer' => [
            'class' => yii\swiftmailer\Mailer::class,
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
    ],
];

if (!YII_ENV_TEST) {
    $config['bootstrap'][] = 'gii';

    $config['modules']['gii'] = [
        'class' => yii\gii\Module::class,

        'generators' => [
            // Controller
            'controller' => [
                'class' => common\gii\generators\controller\Generator::class,
                'templates' => [
                    'lime-controller' => '@common/gii/generators/controller/default',
                ],
            ],

            // CRUD
            'crud' => [
                'class' => common\gii\generators\crud\Generator::class,
                'templates' => [
                    'lime-crud' => '@common/gii/generators/crud/default',
                ],
            ],

            // Extension
            'extension' => [
                'class' => common\gii\generators\extension\Generator::class,
                'templates' => [
                    'lime-extension' => '@common/gii/generators/extension/default',
                ],
            ],

            // Form
            'form' => [
                'class' => common\gii\generators\form\Generator::class,
                'templates' => [
                    'lime-form' => '@common/gii/generators/form/default',
                ],
            ],

            // Model
            'model' => [
                'class' => common\gii\generators\model\Generator::class,
                'templates' => [
                    'lime-model' => '@common/gii/generators/model/default',
                ],
            ],

            // Module
            'module' => [
                'class' => common\gii\generators\module\Generator::class,
                'templates' => [
                    'lime-module' => '@common/gii/generators/module/default',
                ],
            ],
        ],
    ];
}

return $config;