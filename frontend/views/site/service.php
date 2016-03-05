<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 28.02.2016
 * Time: 13:47
 */
use yii\bootstrap\Nav;
use yii\helpers\Url;
use yii\widgets\Menu;

$this->title = 'Услуги';
?>
<div class="container" style="padding-top: 40px;">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    echo Nav::widget([
                        'items' => [
                            [
                                'label' => 'УСЛУГИ',
                                'url' => Url::to(['/site/service']),
                                'linkOptions' => [
                                    'class' => 'nav-header'
                                ],
                            ],
                            [
                                'label' => 'Разработка сайта "под ключ"',
                                'url' => Url::to(['/site/service']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Разработка Landing page',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'Оптимизация для поисковых систем',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'Оптимизация для социальных медиа',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'Аудит сайта',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'E-mail маркетинг',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'One click маркетинг',
                                'url' => ['/#'],
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
                                'url' => Url::to(['/site/service']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Разработка Landing page',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'Оптимизация для поисковых систем',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'Оптимизация для социальных медиа',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'Аудит сайта',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'E-mail маркетинг',
                                'url' => ['/#'],
                            ],
                            [
                                'label' => 'One click маркетинг',
                                'url' => ['/#'],
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
                                        'url' => Url::to(['/site/service']),
                                        //'active' => Yii::$app->controller->action->id == 'service'
                                    ],
                                    [
                                        'label' => 'Разработка Landing page',
                                        'url' => ['/#'],
                                    ],
                                    [
                                        'label' => 'Оптимизация для поисковых систем',
                                        'url' => ['/#'],
                                    ],
                                    [
                                        'label' => 'Оптимизация для социальных медиа',
                                        'url' => ['/#'],
                                    ],
                                ],
                                'options' => [
                                    'id' => 'menu-service',
                                ],
                            ]);
                            ?>
                        </div>
                        <div class="col-sm-6 text-center">
                            <?php
                            echo Menu::widget([
                                'items' => [
                                    [
                                        'label' => 'Аудит сайта',
                                        'url' => ['/#'],
                                    ],
                                    [
                                        'label' => 'E-mail маркетинг',
                                        'url' => ['/#'],
                                    ],
                                    [
                                        'label' => 'One click маркетинг',
                                        'url' => ['/#'],
                                    ],
                                    [
                                        'label' => 'Заказать звонок',
                                        'url' => ['/#'],
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
