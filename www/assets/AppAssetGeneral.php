<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
\Yii::$app->language = "ru-RU";

/**
 * General application asset bundle.

 */

class AppAssetGeneral extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
    ];
    public $js = [
      'js/angular.min.js',
      'js/script.js'
    ];
    public $jsOptions = [
      'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
