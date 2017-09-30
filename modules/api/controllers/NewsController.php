<?php

namespace app\modules\api\controllers;

use app\models\News;
use yii\helpers\Json;
use \yii\web\Response;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {

    }


    public function actionGet($id = '')
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        if ($id != ''){
            $req = News::find()
                ->where("news_id={$id}")->one();
        } else {

            $req = News::find()->all();

        }

        return $req;
    }


}
