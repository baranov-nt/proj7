<?php

/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 25.02.2016
 * Time: 6:32
 */

namespace common\widgets\AnimateCSSWidget;

class AnimateCSSWidget extends \yii\web\AssetBundle
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