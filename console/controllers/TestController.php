<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/18/17
 * Time: 9:48 PM
 */

namespace console\controllers;

use frontend\components\grabbers\ControllerMetadataGrabber;
use frontend\components\grabbers\PagesMetadataGrabber;
use frontend\components\MetadataGrabber;
use frontend\components\MetadataMapper;
use frontend\components\MetadataMapping;
use frontend\components\ObjectBuilder;

use frontend\models\Page;
use frontend\models\pages\HotelMainSectionParams;
use frontend\models\pages\LandingPage;
use frontend\models\pages\TextPageParams;
use frontend\models\pages\TextPage;
use yii\console\Controller;
use yii;


class TestController extends Controller
{

    public function actionUpdate()
    {
        $mapper = new MetadataMapper();
        $mapper->addGrabber(new ControllerMetadataGrabber());
        $mapper->addGrabber(new PagesMetadataGrabber());
        $mapper->updateAll();
    }

    public function actionIndex()
    {

        $page = Page::id(2);

        /**
         * @var LandingPage $page
         */
        $mainSectionParams = new HotelMainSectionParams();
        $mainSectionParams->mainHeaderTypePart = 'гранд отель';
        $mainSectionParams->greetingHeader     = 'Добро пожаловать!';
        $mainSectionParams->greetingContent    = 'Получите удовольствие, выбрав восхитительную атмосферу премиум комплекса «Бежица».';
        $mainSectionParams->sloganFirst        = 'Ваш';
        $mainSectionParams->sloganSecond       = 'изысканный и комфортный отдых';
        $mainSectionParams->sloganThird        = 'МИРОВОГО КЛАССА';

        $page->pageParams->emptySections();
        $page->pageParams->addSection($mainSectionParams);

        $page->save();
    }
}