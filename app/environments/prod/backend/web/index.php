<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

$app_name = 'backend';

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../app/common/config/bootstrap.php';
require __DIR__ . '/../../app/'.$app_name.'/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../app/common/config/main.php',
    require __DIR__ . '/../../app/common/config/main-local.php',
    require __DIR__ . '/../../app/'.$app_name.'/config/main.php',
    require __DIR__ . '/../../app/'.$app_name.'/config/main-local.php'
);

(new yii\web\Application($config))->run();
