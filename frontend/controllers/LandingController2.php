<?php
namespace frontend\controllers;

use Faker\Provider\Base;
use frontend\components\AppHelper;
use frontend\models\SectionItem;
use yii\web\Controller;
use frontend\widgets\common\BaseSection;
use yii;


class LandingController2 extends Controller
{
    private $sectionItems = [];

    public function actionIndex()
    {
        return $this->render('index.php', ['sectionItems' => $this->sectionItems]);
    }

    public function  actionTest()
    {

    }
}