<?php
/**
 * Created by PhpStorm.
 * User: tungmv
 * Date: 9/15/15
 * Time: 3:41 PM
 */

namespace sim\modules\admin\helpers;

use yii\helpers\VarDumper;

class ModuleHelpers
{
    public function getModules()
    {
        $modules = \Yii::getAlias('sim');
        VarDumper::dump($modules);
    }
}