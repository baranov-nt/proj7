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
                    'label' => 'РАБОТЫ',
                    'url' => Url::to(['/works/index']),
                    'linkOptions' => [
                        'class' => 'nav-header'
                    ],
                ],
                [
                    'label' => 'Клиенты',
                    'url' => Url::to(['/works/clients']),
                    'active' => Yii::$app->controller->action->id == 'clients'
                ],
                [
                    'label' => 'Посадочные страницы',
                    'url' => Url::to(['/works/our-landing-page']),
                    'active' => Yii::$app->controller->action->id == 'our-landing-page'
                ],
                [
                    'label' => 'Сайты',
                    'url' => Url::to(['/works/sites']),
                    'active' => Yii::$app->controller->action->id == 'sites'
                ],
                [
                    'label' => 'Видеорекомендации',
                    'url' => Url::to(['/works/video-recommendations']),
                    'active' => Yii::$app->controller->action->id == 'video-recommendations'
                ],
                [
                    'label' => 'SEO продвижение',
                    'url' => Url::to(['/works/seo-promotion']),
                    'active' => Yii::$app->controller->action->id == 'seo-promotion'
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