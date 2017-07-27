<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/18/17
 * Time: 9:48 PM
 */

namespace console\controllers;

use frontend\components\ControllerMetadataGrabber;
use frontend\components\MetadataGrabber;
use frontend\components\MetadataMapper;
use frontend\components\MetadataMapping;
use yii\console\Controller;
use yii;

/**
 * Class TestController для тестирования нового функционала, на продакшене ничего не делает
 * @package console\contollers
 */

class TestController extends Controller
{
    public function actionIndex()
    {
        $mapper = new MetadataMapper();

        $mapper->addGrabber(new ControllerMetadataGrabber());
        $mapper->updateAll();
    }
}