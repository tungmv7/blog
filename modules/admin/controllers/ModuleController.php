<?php
namespace app\modules\admin\controllers;

use app\components\Controller;
use yii\helpers\Url;

class ModuleController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->view->params['menu'] = [
            ['label' => \Yii::t('admin', 'Manage Module'), 'url' => Url::to('manage')],
            ['label' => \Yii::t('admin', 'Add Module'), 'url' => Url::to('add')]
        ];

        $this->layout = "admin";
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}