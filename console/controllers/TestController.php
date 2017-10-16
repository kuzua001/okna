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

        $page = Page::id(18);


        $json = '{
  "sectionsParams": {
    "0": {
      "mainHeaderTypePart": "гранд отель",
      "greetingHeader": "Добро пожаловать!",
      "greetingContent": "Получите удовольствие, выбрав восхитительную атмосферу премиум комплекса «Бежица».",
      "sloganFirst": "Ваш",
      "sloganSecond": "изысканный и комфортный отдых",
      "sloganThird": "МИРОВОГО КЛАССА",
      "title": "",
      "type": "hotel_main"
    },
    "1": {
      "slides": {
        "0": {
          "tabTitle": "Ресторан \"Бежица\"",
          "tabContent": "<p style=\"\n    text-align: justify;\n\">\n\t\t\t\t\t\t\t\t\t\tГастрономическая кухня базируется на использовании сезонных продуктов от приватных фермеров и современных кулинарных техниках.<br>\n\t\t\t\t\t\t\t\t\t\tРесторан предлагает блюда, в которых переосмыслена старинная рецептура, а знакомые вкусы открываются в оригинальных текстурах, формах и сочетаниях.\n\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t<em>\n\t\t\t\t\t\t\t\t\t\t\tИдеально для изысканного банкета или свадебного торжества!\n\t\t\t\t\t\t\t\t\t\t</em>\n\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t<p class=\"increased-margin\">\n\t\t\t\t\t\t\t\t\t\tШеф-повар –&nbsp;Фёдор Гадалов.\n\t\t\t\t\t\t\t\t\t</p>",
          "type": "simple_slide"
        },
        "1": {
          "tabTitle": "Лобби бар",
          "tabContent": "<p style=\"\n    text-align: justify;\n\">\n\t\t\t\t\t\t\t\t\t\tГастрономическая кухня базируется на использовании сезонных продуктов от приватных фермеров и современных кулинарных техниках.<br>\n\t\t\t\t\t\t\t\t\t\tРесторан предлагает блюда, в которых переосмыслена старинная рецептура, а знакомые вкусы открываются в оригинальных текстурах, формах и сочетаниях.\n\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t\t<em>\n\t\t\t\t\t\t\t\t\t\t\tИдеально для изысканного банкета или свадебного торжества!\n\t\t\t\t\t\t\t\t\t\t</em>\n\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t<p class=\"increased-margin\">\n\t\t\t\t\t\t\t\t\t\tШеф-повар –&nbsp;Фёдор Гадалов.\n\t\t\t\t\t\t\t\t\t</p>",
          "type": "simple_slide"
        }
      },
      "detailButtonText": "Узнать больше",
      "title": "Мероприятия и свадьбы",
      "type": "slider_tabs"
    }
  },
  "isEnabled": false
}';

//        /**
//         * @var LandingPage $page
//         */
//        $mainSectionParams = new HotelMainSectionParams();
//        $mainSectionParams->mainHeaderTypePart = 'гранд отель';
//        $mainSectionParams->greetingHeader     = 'Добро пожаловать!';
//        $mainSectionParams->greetingContent    = 'Получите удовольствие, выбрав восхитительную атмосферу премиум комплекса «Бежица».';
//        $mainSectionParams->sloganFirst        = 'Ваш';
//        $mainSectionParams->sloganSecond       = 'изысканный и комфортный отдых';
//        $mainSectionParams->sloganThird        = 'МИРОВОГО КЛАССА';
//
//
//
//
//
//  //      var_dump($mainSectionParams->toPageFields());
//
//        $page->pageParams->emptySections();
//        $page->pageParams->addSection($mainSectionParams);
//       // $page->pageParams->addSection($sliderTabsSectionParams);
//
//        $page->save();


        $page->pageParams->initFromArray(json_decode($json, true));
        $page->save();

        print_r($page);
    }
}