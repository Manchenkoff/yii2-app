<?php
/**
 * Created by Artyom Manchenkov
 * Copyright © 2015-2018 [DeepSide Interactive]
 */

namespace common\components;

use Yii;
use yii\base\Component;

class SeoComponent extends Component {
    /**
     * SEO params config
     *
     * @var array
     */
    public $params;

    public function init() {
        // setting up SEO params

        Yii::$app->view->registerLinkTag([
            'href' => $this->params['icon'],
            'rel' => 'shortcut icon',
        ]);
        Yii::$app->view->registerLinkTag([
            'href' => $this->params['icon'],
            'rel' => 'apple-touch-icon',
        ]);

        $this->setMetaParam('author', $this->params['author']);
        $this->setMetaParam('description', $this->params['description']);
        $this->setMetaParam('keywords', $this->params['keywords']);
        $this->setMetaParam('robots', $this->params['robots']);

        if (empty(Yii::$app->view->title)) {
            Yii::$app->view->title = 'Unnamed page';
        }

        parent::init();
    }

    public function setMetaParam($name, $value) {
        if (empty($name) || empty($value)) return;

        Yii::$app->view->registerMetaTag([
            'name' => $name,
            'content' => $value
        ], $name);
    }
}