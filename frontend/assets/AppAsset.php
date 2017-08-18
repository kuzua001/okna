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
        'css/app.css',
        'js/node_modules/angular-carousel/dist/angular-carousel.min.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:600,300,400|Prata|Lora:400,700|Josefin+Sans|Cormorant+Garamond:400i',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css'
    ];

    public $js = [
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js',
        /*'js/node_modules/core-js/client/shim.min.js',*/
       /* 'js/node_modules/zone.js/dist/zone.js', */
        /*'js/node_modules/reflect-metadata/Reflect.js',*/
        'js/node_modules/systemjs/dist/system.src.js',
        'js/systemjs.config.js',
        'js/import.js',
        'js/app.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_END,
    ];
}
