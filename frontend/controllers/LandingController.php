<?php
namespace frontend\controllers;

use Faker\Provider\Base;
use frontend\components\AppHelper;
use frontend\models\pages\LandingPage;
use frontend\models\pages\TextPageParams;
use frontend\models\SectionItem;
use yii\web\Controller;
use frontend\widgets\common\Section;
use yii;


class LandingController extends CmsController
{

    /**
     * @return string
     */
    public function getDefaultBgColor()
    {
        /** @var $page LandingPage */
        $page = $this->page;

        $lastSection = end($page->pageParams->sectionsParams);
        if (is_a($lastSection, 'frontend\models\pages\TextPageParams')) {
            /** @var $lastSection TextPageParams*/
            return $lastSection->bgColor;
        }

        return parent::getDefaultBgColor();
    }

    public function actionIndex()
    {
        return $this->render('index.php', ['page' => $this->page]);
    }
}