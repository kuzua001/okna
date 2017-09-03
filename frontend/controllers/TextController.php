<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/29/17
 * Time: 9:35 PM
 */

namespace frontend\controllers;


class TextController extends CmsController
{
    public function actionIndex()
    {
        return $this->render('index', [
            'page' => $this->page
        ]);
    }
}