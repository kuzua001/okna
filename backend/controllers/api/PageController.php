<?php

namespace backend\controllers\api;

use yii\filters\VerbFilter;


class PageController extends ApiController
{
    protected function verbs() {
        return [
            'index' => [ 'GET' ],
            'update' => [ 'PUT' ],
        ];
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['verbs'] =
        [
            'class' => VerbFilter::className(),
            'actions' => [
                'index'  => ['get'],
                'update' => ['put']
            ],
        ];

        return $behaviors;
    }

    public function actions()
    {
        $actions = parent::actions();
        $actions['create']['class'] = 'backend\controllers\api\page\CustomCreateAction';

        return $actions;
    }

    public $modelClass = 'frontend\models\Page';
}