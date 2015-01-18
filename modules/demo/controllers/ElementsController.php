<?php

namespace app\modules\demo\controllers;

use yii\web\Controller;

class ElementsController extends Controller
{
    public function actionButton()
    {
        return $this->render('button');
    }

    public function actionDivider()
    {
        return $this->render('divider');
    }

    public function actionFlag()
    {
        return $this->render('flag');
    }

    public function actionHeader()
    {
        return $this->render('header');
    }
}
