<?php
/**
 * Created by PhpStorm.
 * User: tungmangvien
 * Date: 9/21/15
 * Time: 6:05 PM
 */

namespace sim\components;

use Yii;
use yii\helpers\Json;

class Module extends \yii\base\Module
{
    private $_moduleInfo = null;

    public function getName()
    {
        $moduleInfo = $this->getModuleInfo();
        if (isset($moduleInfo['name'])) {
            return $moduleInfo['name'];
        } else {
            return '';
        }
    }

    public function getIcon()
    {
        $moduleInfo = $this->getModuleInfo();
        if (isset($moduleInfo['icon'])) {
            return Yii::$app->assetManager->publish($this->getBasePath() . DIRECTORY_SEPARATOR . $moduleInfo['icon']);
        } else {
            return Yii::getAlias("@sim/assets/files/img/default_module.png");
        }
    }

    public function getId()
    {
        $moduleInfo = $this->getModuleInfo();
        if (isset($moduleInfo['id'])) {
            return $moduleInfo['id'];
        } else {
            return '';
        }
    }

    public function getVersion()
    {
        $moduleInfo = $this->getModuleInfo();
        if (isset($moduleInfo['version'])) {
            return $moduleInfo['version'];
        } else {
            return '1.0';
        }
    }

    public function getKeywords()
    {
        $moduleInfo = $this->getModuleInfo();
        if (isset($moduleInfo['keywords'])) {
            return $moduleInfo['keywords'];
        } else {
            return ['unknown'];
        }
    }

    public function isCore()
    {
        $moduleInfo = $this->getModuleInfo();
        if (isset($moduleInfo['isCore'])) {
            return (bool) $moduleInfo['isCore'];
        } else {
            return false;
        }
    }

    public function isRequired()
    {
        $moduleInfo = $this->getModuleInfo();
        if (isset($moduleInfo['isRequired'])) {
            return (bool) $moduleInfo['isRequired'];
        } else {
            return false;
        }
    }

    public function enable()
    {

    }

    public function disable()
    {

    }


    protected function getModuleInfo()
    {
        if (!empty($this->_moduleInfo)) {
            return $this->_moduleInfo;
        }

        $dataFromJson = file_get_contents($this->getBasePath() . DIRECTORY_SEPARATOR . 'module.json');
        return Json::decode($dataFromJson);
    }
}