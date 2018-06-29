<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

return [

    'language' => 'ru-RU',

    'name' => 'LimeKit Application',

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],

    'vendorPath' => '@vendor',

    'bootstrap' => [
        'seo',
    ],

    'components' => [
        'cache' => [
            'class' => yii\caching\FileCache::class,
        ],

        'authManager' => [
            'class' => yii\rbac\DbManager::class,
        ],

        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => yii\i18n\PhpMessageSource::class,
                    'basePath' => '@common/locales',
                ],

                '*' => [
                    'class' => yii\i18n\PhpMessageSource::class,
                    'basePath' => '@common/locales',
                ],
            ],
        ],

        'seo' => [
            'class' => \common\components\SeoComponent::class,
            'params' => include('seo-params.php'),
        ],
    ],
];
