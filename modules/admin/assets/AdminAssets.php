<?php
namespace app\modules\admin\assets;

use app\assets\AppAsset;
use yii\web\AssetBundle;

class AdminAssets extends AssetBundle
{
    public $basePath = '@webroot/modules/admin/assets';
    public $css = [
        'css/admin.css'
    ];
}