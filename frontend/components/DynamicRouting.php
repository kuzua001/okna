<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 10:29 PM
 */

namespace frontend\components;


use Yii;
use yii\base\BootstrapInterface;
use yii\base\Module;
use frontend\models\cms\Page;

class DynamicRouting extends Module implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->urlManager->addRules(Page::getRoutes());
    }
}