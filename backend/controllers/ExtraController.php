<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/13/17
 * Time: 5:08 PM
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Page;

class ExtraController extends Controller
{

    public function actionEdit($pageId)
    {
        $this->view->params['isStaticContent'] = true;

        $page = Page::id($pageId);

        foreach ()

        var_dump($page->pageParams);


        return $this->render('edit');
    }
}