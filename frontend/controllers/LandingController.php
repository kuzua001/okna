<?php
namespace frontend\controllers;

use frontend\components\AppHelper;
use frontend\models\pages\LandingPage;
use frontend\models\pages\params\TextPageParams;
use yii\web\Controller;
use yii;


class LandingController extends CmsController
{
    public function actionIndex()
    {
        return $this->render('index.php', ['page' => $this->page]);
    }
}