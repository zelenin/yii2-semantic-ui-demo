<?php

namespace app\modules\demo\controllers;

use yii\web\Controller;

class ModulesController extends Controller
{
    public function actionAccordion()
    {
        return $this->render('accordion');
    }

    public function actionCheckbox()
    {
        return $this->render('checkbox');
    }

    public function actionDropdown()
    {
        return $this->render('dropdown');
    }

    public function actionModal()
    {
        return $this->render('modal');
    }

    public function actionNag()
    {
        return $this->render('nag');
    }

    public function actionPopup()
    {
        return $this->render('popup');
    }

    public function actionProgress()
    {
        return $this->render('progress');
    }

    public function actionRating()
    {
        return $this->render('rating');
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionShape()
    {
        return $this->render('shape');
    }

    public function actionSidebar()
    {
        return $this->render('sidebar');
    }

    public function actionSticky()
    {
        return $this->render('sticky');
    }

    public function actionTab()
    {
        return $this->render('tab');
    }

    public function actionTransition()
    {
        return $this->render('transition');
    }

    public function actionVideo()
    {
        return $this->render('video');
    }
}
