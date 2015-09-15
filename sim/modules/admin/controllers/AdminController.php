<?php
namespace sim\modules\admin\controllers;

use app\components\Controller;

class AdminController extends Controller
{

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->view->params['menu'] = [
            ['label' => \Yii::t('admin', 'Manage Modules'), 'url' => ['module/index']],
            ['label' => \Yii::t('admin', 'Create Module'), 'url' => ['module/create']]
        ];

        $this->layout = "admin";
    }

}