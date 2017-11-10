<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SbAdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'sbadmin/vendor/bootstrap/css/bootstrap.min.css',
        'sbadmin/vendor/font-awesome/css/font-awesome.min.css',
        'sbadmin/vendor/datatables/dataTables.bootstrap4.css',
        'sbadmin/css/sb-admin.css',

    ];
    public $js = [
        'sbadmin/vendor/jquery/jquery.min.js',
        'sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'sbadmin/vendor/jquery-easing/jquery.easing.min.js',
        'sbadmin/vendor/chart.js/Chart.min.js',
        'sbadmin/vendor/datatables/jquery.dataTables.js',
        'sbadmin/vendor/datatables/dataTables.bootstrap4.js',
        'sbadmin/js/sb-admin.min.js',
        'sbadmin/js/sb-admin-datatables.min.js',
        //'sbadmin/js/sb-admin-charts.min.js',
    ];

    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
