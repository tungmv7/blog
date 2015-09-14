<?php
namespace app\modules\admin\controllers;

use app\components\Controller;

class ModuleController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->layout = "admin";
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}