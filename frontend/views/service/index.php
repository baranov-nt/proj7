<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 28.02.2016
 * Time: 13:47
 */
use common\widgets\ServiceLeftBlock\ServiceLeftBlock;
use yii\helpers\Url;
use yii\widgets\Menu;

$this->title = 'Услуги';
?>
<div class="container" style="padding-top: 40px;">
    <div class="row">
        <div class="col-md-4">
            <?= ServiceLeftBlock::widget() ?>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="margin-top: 5px;">УСЛУГИ</h1>
                </div>
                <div class="col-md-12">
                    <h3 style="margin-bottom: 15px;">Посмотрите все наши услуги:</h3>
                    <?php
                    echo Menu::widget([
                        'items' => [
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
                            'id' => 'menu-service',
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-md-12">
                    <h2 style="margin-bottom: 15px;">Почему захотите работать с нами</h2>
                    <div class="row">
                        <div class="col-xs-2">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Services/whyyoutoworkicons-03.svg"/>
                        </div>
                        <div class="col-xs-10">
                            <h3 style="margin-top: 35px;">Экспертиза и глубокое погружение</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Services/whyyoutoworkicons-04.svg"/>
                        </div>
                        <div class="col-xs-10">
                            <h3 style="margin-top: 35px;">Тщательная проверка</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Services/whyyoutoworkicons-05.svg"/>
                        </div>
                        <div class="col-xs-10">
                            <h3 style="margin-top: 35px;">Прозрачность</h3>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-12">
                    <div class="call-back-banner">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 style="font-weight: 900; margin: 15px 0 0 0; color: #f9b233;">ХОТИТЕ СОЗДАТЬ</h1>
                                <h1 style="font-weight: 900; margin: 10px 0 15px 0; color: #95c11f;">ИНТЕРНЕТ БИЗНЕС</h1>
                            </div>
                            <div class="col-sm-6 text-center">
                                <button class="btn btn-md btn-warning" style="width: 100%; margin: 15px 0 0 0;">ЗАКАЖИТЕ ОБРАТНЫЙ ЗВОНОК</button>
                                <h3 style="color: #ffffff;">Мы поможем!</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <h2>Наше с вами сотрудничество.</h2>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            echo Menu::widget([
                                'items' => [
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
                                ],
                                'options' => [
                                    'id' => 'menu-service',
                                ],
                            ]);
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            echo Menu::widget([
                                'items' => [
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
                                    [
                                        'label' => 'Заказать звонок',
                                        'url' => Url::to(['/service/call-back']),
                                        'active' => Yii::$app->controller->action->id == 'call-back'
                                    ],
                                ],
                                'options' => [
                                    'id' => 'menu-service',
                                ],
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
