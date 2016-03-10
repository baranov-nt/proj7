<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 10.03.2016
 * Time: 18:36
 */

use yii\helpers\Html;
use common\widgets\WorksLeftBlock\WorksLeftBlock;

$this->title = 'Посадочные страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" style="padding-top: 40px;">
    <div class="row">
        <div class="col-md-4">
            <?= WorksLeftBlock::widget() ?>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="margin-top: 5px;"><?= Html::encode($this->title) ?></h1>
                </div>

            </div>
        </div>
    </div>
</div>