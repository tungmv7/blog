<?php
namespace app\modules\admin\assets;

use yii\web\AssetBundle;

class AdminAssets extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/assets/files';
    public $css = [
        'css/admin.css'
    ];
    public $depends = [
         'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',
      ];
}