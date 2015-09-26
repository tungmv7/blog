<?php
namespace sim\modules\admin\components;

use yii\helpers\VarDumper;

class Controller extends \yii\web\Controller
{

    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->view->params['menu'] = [
            ['label' => \Yii::t('admin', 'Manage Modules'), 'url' => ['/admin/module/index']],
            ['label' => \Yii::t('admin', 'Create Module'), 'url' => ['/admin/module/create']],
            ['label'=>''],
            ['label' => \Yii::t('admin', 'Manage Posts'), 'url' => ['/post/admin/default/index']],
            ['label' => \Yii::t('admin', 'Create Post'), 'url' => ['/post/admin/default/create']]
        ];
        $this->layout = "admin";
    }

}