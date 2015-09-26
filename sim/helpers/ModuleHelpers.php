<?php
/**
 * Created by PhpStorm.
 * User: tungmangvien
 * Date: 9/22/15
 * Time: 8:55 PM
 */

namespace sim\helpers;

use Yii;
use yii\base\InvalidConfigException;

class ModuleHelpers
{
    public static function registerModules($moduleConfigurations)
    {
        foreach($moduleConfigurations['modules'] as $module) {
            self::registerModule($module, $moduleConfigurations['activeModules']);
        }
    }

    public static function registerModule($module, $activeModules)
    {
        if (!isset($module['class']) || !isset($module['id'])) {
            throw new InvalidConfigException("Module id and class are required.");
        }

        // check if module is not enabled and is not core module
        if (!$module['isCore'] && !in_array($module['id'], $activeModules)) {
            return;
        }

        // register module
        Yii::$app->setModule($module['id'], [
            'class' => $module['class'],
            'layoutPath' => '@sim/modules/admin/views/layouts' // default admin layouts
        ]);
    }

}