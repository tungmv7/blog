<?php

namespace sim\modules\admin\helpers;

use yii\helpers\VarDumper;

class ModuleHelpers
{
    public function getModules()
    {
        $modules = \Yii::getAlias('@sim');
        VarDumper::dump($modules); exit;
    }
}