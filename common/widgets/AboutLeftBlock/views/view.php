<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 16.02.2016
 * Time: 11:32
 */
/* @var $widget \common\widgets\WorksLeftBlock\WorksLeftBlock */

use yii\bootstrap\Nav;
use yii\helpers\Url;
?>
<div class="row">
    <div class="col-xs-12">
        <?php
        echo Nav::widget([
            'items' => [
                [
                    'label' => 'О НАС',
                    'url' => Url::to(['/works/index']),
                    'linkOptions' => [
                        'class' => 'nav-header'
                    ],
                ],
                [
                    'label' => 'Компания',
                    'url' => Url::to(['/about/company']),
                    'active' => Yii::$app->controller->action->id == 'company'
                ],
                [
                    'label' => 'Команда',
                    'url' => Url::to(['/about/command']),
                    'active' => Yii::$app->controller->action->id == 'command'
                ],
                [
                    'label' => 'Партнеры',
                    'url' => Url::to(['/about/partners']),
                    'active' => Yii::$app->controller->action->id == 'partners'
                ],
                [
                    'label' => 'Заслуги',
                    'url' => Url::to(['/about/merits']),
                    'active' => Yii::$app->controller->action->id == 'merits'
                ],
            ],
            'options' => [
                'id' => 'nav-service',
                'class' =>'nav nav-pills nav-stacked'
            ], // set this to nav-tab to get tab-styled navigation
        ]);
        ?>
    </div>
    <div class="col-xs-12">
        <div class="service-block-1">
            <h4><strong>Бесплатный аудит сайта</strong></h4>
            <p style="margin: 15px 0 15px 0;">Закажи бесплатный аудит сайта и узнай как повысить продажи с сайта!</p>
            <button class="btn btn-md btn-warning" style="width: 100%;">ЗАКАЗАТЬ АУДИТ</button>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="service-block-1">
            <h4><strong>Повышай продажи с сайта</strong></h4>
            <p style="margin: 15px 0 15px 0;">Закажи у нас продвижение и увелич продажи до небес!</p>
            <button class="btn btn-md btn-warning" style="width: 100%;">НАЧАТЬ ПРОДВИЖЕНИЕ</button>
        </div>
    </div>
</div>