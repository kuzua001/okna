<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 5/27/17
 * Time: 2:31 AM
 */

namespace frontend\controllers;

use frontend\components\AppHelper;
use yii\web\Controller;
use yii;


class MarioController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'mario';
        return $this->render('index');
    }
}