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
            <div class="col-md-12">
                <h2 style="margin-bottom: 15px; margin-top: 15px;"><?= $this->title ?></h2>
                <div class="row">
                    <?= $this->render('_our-landing-page', [/*'model' => $searchModel*/]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
