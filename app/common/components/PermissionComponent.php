<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

namespace common\components;

use Yii;
use yii\base\Component;

class PermissionComponent extends Component {

    /**
     * Checks item permission level
     *
     * @param string $role
     * @return bool allowed status
     */
    public static function isAllowed($role) {
        if (!isset($role) || empty($role) || !is_string($role) || is_null($role)) {
            return true;
        }

        switch ($role) {
            case '*':
                return true;
                break;
            case '@':
                return !Yii::$app->user->isGuest;
                break;
            case '?':
                return Yii::$app->user->isGuest;
                break;
            default:
                return Yii::$app->user->can($role);
        }
    }
}