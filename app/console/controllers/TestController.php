<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

namespace console\controllers;

use yii\console\Controller;
use yii\console\ExitCode;

class TestController extends Controller {

    /**
     * Index action of TestController (just example)
     * @return int
     */
    public function actionIndex() {
        echo "test/index\n";

        return ExitCode::OK;
    }

}