<?php
namespace app\modules\admin\controllers;

use app\components\Controller;

class ModuleController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}