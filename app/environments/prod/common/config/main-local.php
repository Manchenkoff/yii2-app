<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

return [
    'components' => [

        'db' => [
            'class' => yii\db\Connection::class,

            // MySQL
            'dsn' => 'mysql:host=localhost;dbname=DATABASE',

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
        ],
    ],
];
