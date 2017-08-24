<?php

namespace backend\controllers\api;

use frontend\models\Page;
use frontend\models\PageParams;
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
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index'  => ['get'],
                    'update' => ['put']
                ],
            ],
        ];
    }

    public function actions()
    {
        $actions = parent::actions();
        $actions['view']['class']   = 'backend\controllers\api\pagefields\CustomViewAction';
        $actions['update']['class'] = 'backend\controllers\api\pagefields\CustomUpdateAction';


        return $actions;
    }

    public $modelClass = 'frontend\models\PageParams';
}