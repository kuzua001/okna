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
        'https://fonts.googleapis.com/css?family=Open+Sans:600,300,400|Prata|Lora:400,700|Josefin+Sans|Cormorant+Garamond:400i',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/built/admin.css'
    ];

    public $js = [
        'js/node_modules/core-js/client/shim.min.js',
        'js/node_modules/zone.js/dist/zone.js',
        'js/node_modules/reflect-metadata/Reflect.js',
        'js/node_modules/systemjs/dist/system.src.js',
        'js/systemjs.config.js',
        'js/import.js',
        'https://code.jquery.com/jquery-3.2.1.min.js',
        'js/bootstrap.min.js',
        'https://cloud.tinymce.com/stable/tinymce.min.js'
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_END,
    ];
}
