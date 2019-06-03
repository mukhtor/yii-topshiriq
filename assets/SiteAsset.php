<?php
namespace app\assets;
use yii\web\AssetBundle;
class SiteAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web/design';
    public $css = [
        'design2/css/responsive.css',
        'design2/css/main.css',
        'design2/css/animate.css',
        'design2/css/price-range.css',
        'design2/css/prettyPhoto.css',
        'design2/css/font-awesome.min.css',
        'css/style.css',
        'css/animate.css',
        'css/galleryeffect.css',
    ];
    public $js = [
        'design2/js/main.js',
        'design2/js/price-range.js',
        'js/move-top.js',
        'js/easing.js',
        'js/wow.min.js',
        'js/responsiveslides.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}