<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 29.02.2016
 * Time: 19:38
 */
?>
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
use yii\bootstrap\Modal;

$this->title = 'Работы';
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
                                'label' => 'РАБОТЫ',
                                'url' => Url::to(['/site/service']),
                                'linkOptions' => [
                                    'class' => 'nav-header'
                                ],
                            ],
                            [
                                'label' => 'Клиенты',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Посадочные страницы',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Сайты',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Видеорекомендации',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'SEO продвижение',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
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
                    <h1 style="margin-top: 5px;">РАБОТЫ</h1>
                </div>
                <div class="col-md-12">
                    <h3 style="margin-bottom: 15px;">Посмотрите все наши работы:</h3>
                    <?php
                    echo Menu::widget([
                        'items' => [
                            [
                                'label' => 'Клиенты',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Посадочные страницы',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Сайты',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'Видеорекомендации',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                            [
                                'label' => 'SEO продвижение',
                                'url' => Url::to(['/#']),
                                //'active' => Yii::$app->controller->action->id == 'service'
                            ],
                        ],
                        'options' => [
                            'id' => 'menu-service',
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-md-12">
                    <h2 style="margin-bottom: 15px;">Клиенты</h2>
                    <div class="row">
                        <div class="col-xs-3 text-center">
                            <div style="border: 1px solid #cccccc;">
                                <a href="/#">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w1.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div style="border: 1px solid #cccccc;">
                                <a href="/#">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w2.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div style="border: 1px solid #cccccc;">
                                <a href="/#">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w3.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div style="border: 1px solid #cccccc;">
                                <a href="/#">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w1.png"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h2 style="margin-bottom: 20px;">Посадочные страницы</h2>
                    <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-1">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-1',
                                    'header' => '<h2>Заголовок 1</h2>',
                                    'toggleButton' => false,
                                ]);
                                echo 'Контент 1';
                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-2">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-2',
                                    'header' => '<h2>Заголовок 2</h2>',
                                    'toggleButton' => false,
                                ]);
                                echo 'Контент 2';
                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-md-12 text-right visible-lg visible-md visible-sm hidden-xs">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                        <div class="col-md-12 visible-xs hidden-sm hidden-md hidden-lg">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- ------------------- -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="margin-bottom: 20px; margin-top: 60px;">
                                <div class="col-sm-2">
                                    <h1 style="margin: 0;">Сайты</h1>
                                </div>
                                <div class="col-sm-10" style="margin-top: 2px; padding-left: 20px;">
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px;">Корпоротивные</button>
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px;">Интернет магазины</button>
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px;">Каталоги</button>
                                    <button class="btn btn-sm btn-warning">Визитки</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-3">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-3',
                                    'header' => '<h2>Заголовок 3</h2>',
                                    'toggleButton' => false,
                                ]);
                                echo 'Контент 3';
                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-4">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-4',
                                    'header' => '<h2>Заголовок 4</h2>',
                                    'toggleButton' => false,
                                ]);
                                echo 'Контент 4';
                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-md-12 text-right visible-lg visible-md visible-sm hidden-xs">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                        <div class="col-md-12 visible-xs hidden-sm hidden-md hidden-lg">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                    </div>
                    <!-- ------------------------------ -->
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 60px; margin-bottom: 20px;">
                            <h1 style="margin: 0;">Видеорекомендации</h1>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-5">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-5',
                                    'header' => '<h2>Видео 1</h2>',
                                    'toggleButton' => false,
                                    'closeButton' => [
                                        'onclick' => ''
                                    ]
                                ]);

                                echo \vision\ytbwidget\YouTube::widget([
                                    'videoId' => 'diDJV_7EmDk',
                                    'divId' => 'myDiv1',
                                ]);

                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-6">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-6',
                                    'header' => '<h2>Видео 2</h2>',
                                    'toggleButton' => false,
                                ]);

                                echo \vision\ytbwidget\YouTube::widget([
                                    'videoId' => 'diDJV_7EmDk',
                                    'divId' => 'myDiv2',
                                ]);

                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-md-12 text-right visible-lg visible-md visible-sm hidden-xs">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                        <div class="col-md-12 visible-xs hidden-sm hidden-md hidden-lg">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                    </div>
                    <!-- ---------------------------- -->
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 60px; margin-bottom: 20px;">
                            <h1 style="margin: 0;">SEO продвижение</h1>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-7">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-7',
                                    'header' => '<h2>Заголовок 7</h2>',
                                    'toggleButton' => false,
                                ]);
                                echo 'Контент 7';
                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px;">
                            <div class="img-container">
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w_temp.png"/>
                                <div class="img-container-content">LOBSTER STUDIO</div>
                                <div class="img-container-active-content">
                                    <div class="img-container-active-content-inside">
                                        <p>LOBSTER STUDIO</p>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-8">СМОТРЕТЬ</button>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="btn btn-transparent">НА САЙТ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php Modal::begin([
                                    'id' => 'modal-8',
                                    'header' => '<h2>Заголовок 8</h2>',
                                    'toggleButton' => false,
                                ]);
                                echo 'Контент 8';
                                Modal::end(); ?>
                            </div>
                        </div>
                        <div class="col-md-12 text-right visible-lg visible-md visible-sm hidden-xs">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                        <div class="col-md-12 visible-xs hidden-sm hidden-md hidden-lg">
                            <button class="btn btn-md btn-warning">ПОСМОТРЕТЬ ЕЩЕ</button>
                        </div>
                    </div>
                    <!-- ---------------------- -->
                </div>
            </div>
        </div>
    </div>
</div>

