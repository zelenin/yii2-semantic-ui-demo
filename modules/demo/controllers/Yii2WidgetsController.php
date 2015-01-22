<?php

namespace app\modules\demo\controllers;

use app\modules\demo\models\Model;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class Yii2WidgetsController extends Controller
{
    public function actionActiveForm()
    {
        $model = new Model();
        $model->setAttributes([
            'id' => 1,
            'name' => 'Title 1',
            'total' => rand(10, 99)
        ]);
        return $this->render('active-form', ['model' => $model]);
    }

    public function actionDetailView()
    {
        $model = new Model();
        $model->setAttributes([
            'id' => 1,
            'name' => 'Title 1',
            'total' => rand(10, 99)
        ]);
        return $this->render('detail-view', ['model' => $model]);
    }

    public function actionGridView()
    {
        $array = [];
        for ($i = 1; $i <= 50; $i++) {
            $model = new Model();
            $model->setAttributes([
                'id' => $i,
                'name' => 'Title ' . $i,
                'total' => rand(10, 99)
            ]);
            $array[] = $model;
        }
        $dataProvider = new ArrayDataProvider([
            'allModels' => $array,
            'sort' => [
                'attributes' => ['id', 'name', 'total'],
            ],
            'pagination' => [
                'pageSize' => 10
            ]
        ]);
        return $this->render('grid-view', ['dataProvider' => $dataProvider]);
    }
}
