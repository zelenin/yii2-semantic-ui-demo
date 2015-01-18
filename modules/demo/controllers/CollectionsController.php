<?php

namespace app\modules\demo\controllers;

use yii\web\Controller;

class CollectionsController extends Controller
{
    public function actionBreadcrumb()
    {
        return $this->render('breadcrumb');
    }

    public function actionMenu()
    {
        return $this->render('menu');
    }

    public function actionMessage()
    {
        return $this->render('message');
    }
}
