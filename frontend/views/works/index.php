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
use common\widgets\WorksLeftBlock\WorksLeftBlock;
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\bootstrap\Modal;

$this->title = 'Работы';
?>
<div class="container" style="padding-top: 40px;">
    <div class="row">
        <div class="col-md-4">
            <?= WorksLeftBlock::widget() ?>
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
                                'url' => Url::to(['/works/clients']),
                                'active' => Yii::$app->controller->action->id == 'clients'
                            ],
                            [
                                'label' => 'Посадочные страницы',
                                'url' => Url::to(['/works/landing-page']),
                                'active' => Yii::$app->controller->action->id == 'landing-page'
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
                                <a href="<?= Url::to(['/works/clients']) ?>">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w1.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div style="border: 1px solid #cccccc;">
                                <a href="<?= Url::to(['/works/clients']) ?>">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w2.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div style="border: 1px solid #cccccc;">
                                <a href="<?= Url::to(['/works/clients']) ?>">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w3.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div style="border: 1px solid #cccccc;">
                                <a href="<?= Url::to(['/works/clients']) ?>">
                                    <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w1.png"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- ------------------------- -->
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
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px; margin-bottom: 5px;">Корпоротивные</button>
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px; margin-bottom: 5px;">Интернет магазины</button>
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px; margin-bottom: 5px;">Каталоги</button>
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px; margin-bottom: 5px;">Визитки</button>
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
                            <h2 style="margin: 0;">Видеорекомендации</h2>
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
                                <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl.'/images/Works/w_temp.png' ?>"/>
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

