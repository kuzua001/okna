<?php

namespace backend\controllers\api;

use frontend\models\cms\Page;
use frontend\models\cms\PageParams;
use yii\filters\VerbFilter;



class PageFieldsController extends ApiController
{
    protected function verbs() {
        return [
            'index' => [ 'GET' ],
            'update' => [ 'PUT' ],
        ];
    }

    public function behaviors()
    {
        $behaviors = [];//parent::behaviors();
        $behaviors['verbs'] = [
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
        $actions['view']['class']   = 'backend\controllers\api\pagefields\CustomViewAction';
        $actions['update']['class'] = 'backend\controllers\api\pagefields\CustomUpdateAction';


        return $actions;
    }

    public $modelClass = 'frontend\models\cms\PageParams';
}