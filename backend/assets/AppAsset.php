<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/css/font-awesome.min.css',
        'vendors/css/simple-line-icons.min.css',
        'css/style.css',
    ];
    public $js = [
        'vendors/js/popper.min.js',
        'vendors/js/bootstrap.min.js',
        'vendors/js/pace.min.js',
        'vendors/js/Chart.min.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
