<?php
namespace ramosisw\CImaterial\web;

use yii\base\Exception;
use yii\web\AssetBundle as BaseMaterialAsset;

/**
 * Material AssetBundle
 * @since 0.1
 */
class MaterialAsset extends BaseMaterialAsset
{
    public $sourcePath = '@vendor/ramosisw/yii2-material-dashboard/assets';


    public $css = [
        'abc/css/material-kit.css?v=2.0.4',
        // 'css/material-dashboard.css',
        // 'abc/css/material-kit.css',
         'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons',
        // 'https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=2.0.4',
    ];

    public $js = [
        // 'js/material.min.js',
        // 'js/chartist.min.js',
        // 'js/bootstrap-notify.js',
        // 'js/material-dashboard.js',
        // 'js/superfish.js',
        "abc/js/plugins/moment.min.js",
        "abc/js/core/jquery.min.js",
        "abc/js/core/popper.min.js",
        "abc/js/core/bootstrap-material-design.min.js",
        "abc/js/plugins/bootstrap-datetimepicker.js",
        "abc/js/plugins/nouislider.min.js",
        "abc/js/plugins/jquery.sharrre.js",
        "abc/js/material-kit.js?v=2.0.4"
    ];

    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\web\JqueryAsset',
        // 'yii\bootstrap\BootstrapAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
    ];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}
