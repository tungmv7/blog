<?php

namespace sim\modules\admin\helpers;

use yii\helpers\Json;
use yii\helpers\VarDumper;

class ModuleHelpers
{
    public function getModules()
    {
        $modules = [];
        $moduleDirs = glob(\Yii::getAlias('@sim/modules') . DIRECTORY_SEPARATOR . '*', GLOB_ONLYDIR);
        foreach($moduleDirs as $moduleDir) {
            if (file_exists($moduleDir . DIRECTORY_SEPARATOR . 'module.json')) {
                $moduleJson = file_get_contents($moduleDir . DIRECTORY_SEPARATOR . 'module.json');
                $modules[] = Json::decode($moduleJson);
            }
        }

        VarDumper::dump($modules, 10, true);
        exit;
    }
}