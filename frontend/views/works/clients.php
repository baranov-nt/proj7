<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 10.03.2016
 * Time: 18:32
 */

use yii\helpers\Html;
use common\widgets\WorksLeftBlock\WorksLeftBlock;

$this->title = 'Клиенты';
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
                <div class="col-sm-10" style="margin: 0 0 20px 0; padding: 0;">
                    <button class="btn btn-sm btn-warning" style="margin-right: 10px;">Сайт</button>
                    <button class="btn btn-sm btn-default" style="margin-right: 10px; text-transform: none;">SEO Продвижение</button>
                </div>
                <div class="row">
                    <?= $this->render('_client', [/*'model' => $searchModel*/]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
