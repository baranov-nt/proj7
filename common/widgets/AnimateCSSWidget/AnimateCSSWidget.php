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
    public $sourcePath = '@common/widgets/AnimateCSSWidget';

    /**
     * @inherit
     */

    public $js = [
        'animate.js',
    ];

    public $depends = [
        'common\widgets\AnimateCSSWidget\AssetBundle',
    ];
}