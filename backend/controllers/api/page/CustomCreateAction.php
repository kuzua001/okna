<?php

/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 8/12/17
 * Time: 3:37 PM
 */
namespace backend\controllers\api\page;

use Yii;
use yii\helpers\Url;
use yii\web\ServerErrorHttpException;
use frontend\models\Page;
use yii\rest\CreateAction;

class CustomCreateAction extends CreateAction
{
    /**
     * Displays a model.
     * @return Page the model being displayed
     * @throws ServerErrorHttpException
     */
    public function run()
    {
        if ($this->checkAccess) {
            call_user_func($this->checkAccess, $this->id);
        }

        $page = new Page();

        $data = array_merge(Yii::$app->getRequest()->getBodyParams(), [
            'action_id' => 37,
            'pages_id'  => 2
        ]);

        $page->load($data, '');

        if ($page->save()) {
            $response = Yii::$app->getResponse();
            $response->setStatusCode(201);
            $id = implode(',', array_values($page->getPrimaryKey(true)));
            $response->getHeaders()->set('Location', Url::toRoute([$this->viewAction, 'id' => $id], true));
        } else if (!$page->hasErrors()) {
            throw new ServerErrorHttpException('Failed to create the object for unknown reason.');
        }

        return $page;
    }
}