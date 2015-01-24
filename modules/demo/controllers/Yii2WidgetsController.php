<?php

namespace app\modules\demo\controllers;

use app\modules\demo\models\Model;
use app\modules\demo\models\search\ModelSearch;
use Yii;
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
        $searchModel = new ModelSearch();
        $dataProvider = $searchModel->search(Yii::$app->getRequest()->get());

        return $this->render('grid-view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
}
