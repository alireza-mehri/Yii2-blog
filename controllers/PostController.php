<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use yii\web\Controller;


class PostController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionForm()
    {
        $model = new Post;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return $this->render('show', [
                'model' => $model
            ]);
        } else {
            return $this->render('form', [
                'model' => $model,
            ]);
        }

    }

}
