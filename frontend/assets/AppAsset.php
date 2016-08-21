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
        'css/site.css',
        'css/reset.css',
        'css/bootstrap.css',
        'css/prettyPhoto.css',
        'css/font-awesome.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/YTPlayer.css',
        'css/animate.css',
        'rs-plugin/css/settings.css',
        'rs-plugin/css/extralayers.css',
        'css/style.css',
        'css/skins/blue.css',
        'css/skins/red.css',
        'css/skins/yellow.css',
        'css/skins/green.css',
        'css/skins/orange.css',
        'css/skins/gray.css',
        'css/skins/purple.css',
        'css/skins/midnight.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'js/jquery.prettyPhoto.js',
        'js/modernizr.custom.js',
        'js/jquery.scrollTo.js',
        'js/retina.js',
        'js/jquery.nav.js',
        'js/isotope.min.js',
        'js/owl.carousel.js',
        'js/tweetie.js',
        'js/jquery.mb.YTPlayer.js', 
        'js/waypoints.min.js',
        'pretty/shortcodes.js',
        'js/styleswitcher.js',
        'rs-plugin/js/jquery.themepunch.tools.min.js',
        'rs-plugin/js/jquery.themepunch.revolution.min.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}




