<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 28.02.2016
 * Time: 23:19
 */

namespace common\widgets\AnimateCSSWidget;


class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/animate.css';

    /**
     * @inherit
     */
    public $css = [
    'animate.min.css',
];

    /* public $js = [
         'gulpfile.js',
     ];*/

    public $depends = [
    'yii\web\YiiAsset',
];
}