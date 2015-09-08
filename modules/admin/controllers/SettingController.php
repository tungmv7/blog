<?php

namespace app\modules\admin\controllers;

use app\components\Controller;

class SettingController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}