<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [

        'js/jquery.cookie.js',
        'js/jquery.accordion.js',
        'js/common.js'
    ];
    //public $jsOptions = ['position' => \yii\web\View::POS_END];
    /*
    public $depends = [
        'yii\web\YiiAsset',
<<<<<<< HEAD
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JQueryAsset'
=======
        'yii\bootstrap\BootstrapPluginAsset',
>>>>>>> 7e26df3666202ea44e4a228698b885d3f3804d99
    ];
    */
}
