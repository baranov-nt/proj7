<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 16.02.2016
 * Time: 11:32
 */
/* @var $widget \common\widgets\ServiceLeftBlock\ServiceLeftBlock */


use yii\bootstrap\Nav;
use yii\helpers\Url;
?>
<div class="row">
    <div class="col-xs-12">
        <?php
        echo Nav::widget([
            'items' => [
                [
                    'label' => 'УСЛУГИ',
                    'url' => Url::to(['/service/index']),
                    'linkOptions' => [
                        'class' => 'nav-header'
                    ],
                ],
                [
                    'label' => 'Разработка сайта "под ключ"',
                    'url' => Url::to(['/service/site-development']),
                    'active' => Yii::$app->controller->action->id == 'site-development'
                ],
                [
                    'label' => 'Разработка Landing page',
                    'url' => Url::to(['/service/landing-page']),
                    'active' => Yii::$app->controller->action->id == 'landing-page'
                ],
                [
                    'label' => 'Оптимизация для поисковых систем',
                    'url' => Url::to(['/service/search-optimization']),
                    'active' => Yii::$app->controller->action->id == 'search-optimization'
                ],
                [
                    'label' => 'Оптимизация для социальных медиа',
                    'url' => Url::to(['/service/media-optimization']),
                    'active' => Yii::$app->controller->action->id == 'media-optimization'
                ],
                [
                    'label' => 'Аудит сайта',
                    'url' => Url::to(['/service/site-audit']),
                    'active' => Yii::$app->controller->action->id == 'site-audit'
                ],
                [
                    'label' => 'E-mail маркетинг',
                    'url' => Url::to(['/service/email-marketing']),
                    'active' => Yii::$app->controller->action->id == 'email-marketing'
                ],
                [
                    'label' => 'One click маркетинг',
                    'url' => Url::to(['/service/one-click-marketing']),
                    'active' => Yii::$app->controller->action->id == 'one-click-marketing'
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

