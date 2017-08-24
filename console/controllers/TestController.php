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
use frontend\models\pages\SliderItemParams;
use frontend\models\pages\SliderTabsSectionParams;
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


        $slide1 = new SliderItemParams();
        $slide1->tabTitle = 'Ресторан "Бежица"';
        $slide1->tabContent = '<p style="
    text-align: justify;
">
										Гастрономическая кухня базируется на использовании сезонных продуктов от приватных фермеров и современных кулинарных техниках.<br>
										Ресторан предлагает блюда, в которых переосмыслена старинная рецептура, а знакомые вкусы открываются в оригинальных текстурах, формах и сочетаниях.
									</p>
									<p>
										<em>
											Идеально для изысканного банкета или свадебного торжества!
										</em>
									</p>
									<p class="increased-margin">
										Шеф-повар –&nbsp;Фёдор Гадалов.
									</p>';

        $slide2 = new SliderItemParams();
        $slide2->tabTitle = 'Лобби бар';
        $slide2->tabContent = '<p style="
    text-align: justify;
">
										Гастрономическая кухня базируется на использовании сезонных продуктов от приватных фермеров и современных кулинарных техниках.<br>
										Ресторан предлагает блюда, в которых переосмыслена старинная рецептура, а знакомые вкусы открываются в оригинальных текстурах, формах и сочетаниях.
									</p>
									<p>
										<em>
											Идеально для изысканного банкета или свадебного торжества!
										</em>
									</p>
									<p class="increased-margin">
										Шеф-повар –&nbsp;Фёдор Гадалов.
									</p>';

        $sliderTabsSectionParams = new SliderTabsSectionParams();
        $sliderTabsSectionParams->detailButtonText = 'Узнать больше';
        $sliderTabsSectionParams->title = 'Мероприятия и свадьбы';
        $sliderTabsSectionParams->slides = [$slide1, $slide2];



  //      var_dump($mainSectionParams->toPageFields());

        $page->pageParams->emptySections();
        $page->pageParams->addSection($mainSectionParams);
        $page->pageParams->addSection($sliderTabsSectionParams);

        $page->save();
    }
}