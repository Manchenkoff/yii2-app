<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

namespace console\controllers;

use common\models\Menu;
use common\models\MenuItem;
use common\models\User;
use yii\console\Controller;
use yii\console\ExitCode;

class InitController extends Controller {

    /**
     * Run all loads with default order
     */
    public function actionAll() {
        echo "init/all";

        return ExitCode::OK;
    }

}