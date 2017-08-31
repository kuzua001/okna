<?php
namespace frontend\controllers;

use Faker\Provider\Base;
use frontend\components\AppHelper;
use frontend\models\SectionItem;
use yii\web\Controller;
use frontend\widgets\common\Section;
use yii;


class LandingController extends CmsController
{

    public function actionIndex()
    {
        return $this->render('index.php', ['page' => $this->page]);
    }
}