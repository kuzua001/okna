<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/12/17
 * Time: 3:37 PM
 */
namespace backend\controllers\api\pagefields;

use frontend\models\cms\Page;
use backend\models\api\PageFieldsUpdateResponse;
use yii\rest\UpdateAction;

class CustomUpdateAction extends UpdateAction
{
    /**
     * Displays a model.
     *
     * @param string $id the primary key of the model.
     *
     * @return PageFieldsUpdateResponse the model being displayed
     */
    public function run($id)
    {
        $data = json_decode(\Yii::$app->getRequest()->getRawBody(), true);

        $page = Page::id($id);

        $page->pageParams->initFromArray($data);

        $page->save();


        return new PageFieldsUpdateResponse([
            'test' => 'test'
        ]);
        //return !empty($page) ? $page->getPageFields() : null;
    }
}