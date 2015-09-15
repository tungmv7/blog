<?php
namespace sim\modules\admin\assets;

use yii\web\AssetBundle;

class AdminAssets extends AssetBundle
{
    public $sourcePath = '@sim/modules/admin/assets/files';
    public $css = [
        'css/admin.css'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}