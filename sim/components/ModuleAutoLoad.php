<?php
/**
 * Created by PhpStorm.
 * User: tungmangvien
 * Date: 9/22/15
 * Time: 8:42 PM
 */

namespace sim\components;

use sim\modules\admin\models\module\Module;
use Yii;
use sim\helpers\ModuleHelpers;
use yii\base\BootstrapInterface;
use yii\helpers\Json;

class ModuleAutoLoad implements  BootstrapInterface
{
    public $cacheDuration = 3600;
    public $cacheKey = 'sim:modules:configuration';

    private $_activeModules = [];
    private $_coreModules = [];
    private $_currentModules = [];

    public function bootstrap($app)
    {
        $moduleConfigurations = Yii::$app->cache->get($this->cacheKey);

        if (YII_DEBUG) {
            // $moduleConfigurations = false;
        }

        if ($moduleConfigurations === false) {
            $modules = [];
            foreach (\Yii::$app->params['modulesPath'] as $alias) {
                $modulePath = \Yii::getAlias($alias);
                foreach (glob($modulePath . DIRECTORY_SEPARATOR . '*', GLOB_ONLYDIR) as $moduleDir) {
                    if (is_readable($jsonFile = $moduleDir . DIRECTORY_SEPARATOR . 'module.json')) {
                        $modules[] = Json::decode(file_get_contents($jsonFile));
                    }
                }
            }

            $moduleConfigurations = [
                'modules' => $modules,
                'activeModules' => self::getActiveModules()
            ];

            Yii::$app->cache->set($this->cacheKey, $moduleConfigurations, $this->cacheDuration);
        }
        ModuleHelpers::registerModules($moduleConfigurations);
    }

    protected static function registerModules($moduleConfigurations)
    {
        foreach($moduleConfigurations['modules'] as $module) {
            self::registerModule($module, $moduleConfigurations['activeModules']);
        }
    }

    protected static function registerModule($module, $activeModules)
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
            'class' => $module['class']
        ]);
    }

    protected static function getActiveModules($returnIds = true)
    {
        $activeModules = [];
        foreach(self::getModules() as $module)
        {
            if ($module['status'] == Module::STATUS_ACTIVE) {
                $activeModules[] = $returnIds ? $module['id'] : $module;
            }
        }
        return $activeModules;
    }

    protected static function getModules()
    {
        // TODO: load in batch and caching later
        return Module::find()->asArray()->all();

    }

}