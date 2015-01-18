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

    public function actionIcon()
    {
        return $this->render('icon');
    }

    public function actionImage()
    {
        return $this->render('image');
    }

    public function actionInput()
    {
        return $this->render('input');
    }

    public function actionLabel()
    {
        return $this->render('label');
    }

    public function actionList()
    {
        return $this->render('list');
    }

    public function actionLoader()
    {
        return $this->render('loader');
    }

    public function actionRail()
    {
        return $this->render('rail');
    }

    public function actionReveal()
    {
        return $this->render('reveal');
    }

    public function actionSegment()
    {
        return $this->render('segment');
    }

    public function actionStep()
    {
        return $this->render('step');
    }
}
