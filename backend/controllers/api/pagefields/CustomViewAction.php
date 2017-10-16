<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/12/17
 * Time: 3:37 PM
 */
namespace backend\controllers\api\pagefields;

use frontend\models\cms\Page;
use yii\base\Object;
use yii\rest\ViewAction;

class CustomViewAction extends ViewAction
{
    /**
     * Displays a model.
     * @param string $id the primary key of the model.
     * @return Object the model being displayed
     */
    public function run($id)
    {
        $page = Page::id($id);

        return !empty($page) ? $page->getPageFields() : null;
    }
}