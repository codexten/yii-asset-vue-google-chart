<?php

namespace codexten\yii\web\assets\VueGoogleChart;

use codexten\yii\web\assets\vue\VueAsset;
use yii\web\AssetBundle;

class VueGoogleChartAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue-google-charts/dist';
    public $js = [
        'vue-google-charts.browser.js',
    ];
    public $depends = [
        VueAsset::class,
    ];
}
