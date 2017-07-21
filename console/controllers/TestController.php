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
        $controllerlist = [];

        $grabber = new ControllerMetadataGrabber();
        $controllerlist = $grabber->getMethodList('AjaxController');

        var_dump($controllerlist);

        /*
        asort($controllerlist);
        $fulllist = [];
        foreach ($controllerlist as $controller) {
            $handle = fopen($conrollerDir . $controller, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    if (preg_match('/public function action(.*?)\(/', $line, $display)):
                        if (strlen($display[1]) > 2):
                            $fulllist[substr($controller, 0, -4)][] = strtolower($display[1]);
                        endif;
                    endif;
                }
            }
            fclose($handle);
        }

        var_dump($fulllist);*/
    }
}