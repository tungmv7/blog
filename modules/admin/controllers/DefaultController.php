<?php

namespace app\modules\admin\controllers;

use app\components\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
