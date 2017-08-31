<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/27/17
 * Time: 8:41 PM
 */

namespace frontend\controllers;

use frontend\views\CmsView;
use yii\web\Controller;
use yii;
use yii\helpers\Url;
use frontend\models\Page;

class CmsController extends Controller
{

    /**
     * Данные, которые нужны контроллеру для работы
     */
    protected $getParams  = null;

    /**
     * @var Page
     */
    protected $page       = null;

    public function beforeAction($action)
    {
        $url        = Url::to();

        if (!isset(Yii::$app->request->queryParams['pageId'])) {
            throw new yii\web\NotFoundHttpException();
        }

        $pageId     = Yii::$app->request->queryParams['pageId'];
        $this->page = Page::id($pageId);


        $view = new CmsView();
        $view->description = $this->page->pageParams->metaDescription;
        $view->title = $this->page->pageParams->metaTitle;

        $this->setView($view);

        return parent::beforeAction($action);
    }
}