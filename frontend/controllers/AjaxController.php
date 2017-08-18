<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 5/27/17
 * Time: 2:31 AM
 */

namespace frontend\controllers;

use frontend\components\AppHelper;
use yii\web\Controller;
use yii;
use frontend\models\Product;

// Yii2 cache
// Yii2 cache invalidation
// Yii2 dependency injection (compomnents)
// Ajax npost get examples
// CSRF validation mechanizm
// Jquery fadeIn/fadeOut, css tranzition
// CSS display none;
// twitter bootstrap
// yii2 User model authorization
// todo yii2 RBAC

class AjaxController extends Controller
{
    public function beforeAction($action)
    {
        // Отключение csrf
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }


    /**
     * $.ajax({'type':'post','url':'/ajax/set-text', 'data' :
    {'key' : '1','lang':'ru','value':'azazaza'}, 'success':function(html){console.log(html);}});
     */

    public function actionGetProducts()
    {
        return json_encode(Product::getTop());
    }

    public function actionUpdateCart()
    {
        $post = Yii::$app->request->post();

        var_dump($post);

        //\Yii::$app->session['cart'] =
    }
}