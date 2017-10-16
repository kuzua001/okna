<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 9/4/17
 * Time: 2:19 AM
 */

namespace backend\controllers\api;

use yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\Response;
use backend\models\UploadForm;

class FilesController extends Controller
{
    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => \yii\filters\VerbFilter::className(),
                'actions' => [
                    'index'  => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $response = [
            'status' => 'error'
        ];

        if (Yii::$app->request->isAjax) {
            $model = new UploadForm();

            $model->file = UploadedFile::getInstanceByName('file');
            //exit();
            if ($model->validate()) {
                $fileName = '/uploads/' . $model->file->baseName .'-' . time() . '.' . $model->file->extension;
                $filePath = Yii::getAlias('@frontend') . '/web' . $fileName;
                $model->file->saveAs($filePath);
                $response['status'] = 'ok';
                $response['file']   = $fileName;
            }
        }

        return $response;
    }
}