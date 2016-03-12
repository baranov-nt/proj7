<?php
/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use common\widgets\AnimateCSSWidget\AnimateCSSWidget;

AnimateCSSWidget::register($this);

$this->title = 'IT PROGECTS';
?>
<div id="content">
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-2 text-center" style="margin-top: 190px;">
                    <img style="width: 100px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Mainbanner/logobanner.svg"/>
                </div>
                <div class="col-md-4 col-md-offset-4 text-center" style="color: #ffffff; padding-top: 40px;">
                    <p>Мы поставим ваш бизнес на лидирующие позиции.</p>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center" style="color: #ffffff; padding-top: 80px; text-shadow: 1px 1px 2px black, 0 0 1em grey;">
                    <h2>Закажите бесплатный аудит для вашего сайта.</h2>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center" style="color: #ffffff; margin-bottom: 60px;">
                    <div >
                        <?php
                        ActiveForm::begin([
                            'action' => ['/#'],
                            'options' => [
                                'id' => 'autocomlite-city-form',
                                'class' => 'col-md-12',
                                'style' => 'margin: 0; padding: 0;'
                            ]]);
                        ?>
                        <div class="input-group hidden-sm hidden-xs" style="border: 15px solid rgba(235,147,22, .8); padding: 0 !important; height: 60px;">
                            <span class="input-group-addon">Введите адрес вашего веб сайта</span>
                            <?php
                            echo \yii\widgets\MaskedInput::widget([
                                'name' => 'phone',
                                'mask' => '\h\ttp://',
                                'options' => [
                                    'class' => 'form-control form-inline',
                                    'placeholder' => 'http://',
                                ]
                            ]);
                            ?>
                            <span class="input-group-btn">
                            <?php
                            echo Html::submitButton(
                                'Заказать бесплатный аудит',
                                [
                                    'class' => 'btn btn-site',
                                    'style' => ''
                                ]
                            );
                            ?>
                        </span>
                        </div>
                        <div class="hidden-md hidden-lg" style="border: 15px solid rgba(235,147,22, .8); padding: 0 !important;">
                            <span class="input-group-addon" style="background-color: #adadad; color: #ffffff; border-radius: 0;">Введите адрес вашего веб сайта</span>
                            <?php
                            echo \yii\widgets\MaskedInput::widget([
                                'name' => 'phone',
                                'mask' => '\h\ttp://',
                                'options' => [
                                    'class' => 'form-control',
                                    'placeholder' => 'http://',
                                    'style' => 'width: 100%; border-radius: 0;'
                                ]
                            ]);
                            ?>
                            <?php
                            echo Html::submitButton(
                                'Заказать бессплатный аудит',
                                [
                                    'class' => 'btn btn-site',
                                    'style' => 'width: 100%; border-radius: 0;'
                                ]
                            );
                            ?>
                        </div>
                        <?php
                        ActiveForm::end();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-services text-center">
        <div class="row" style="width: 100%">
            <div class="col-md-12 text-center" style="color: #ffffff; padding-top: 10px;">
                <h3>НАШИ УСЛУГИ</h3>
            </div>
            <div class="col-md-2 col-md-offset-3 text-center">
                <img style="width: 100%" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Services/Services1.svg"/>
                <h5 style="color: #ffffff; font-weight: 700; padding-top: 7px;">РАЗРАБОТКА САЙТОВ</h5>
                <p style="color: #ffffff;">
                    It takes input in the form of a hex color code value and converts that value to a RGB value that can be used to specify color in photo editing software.
                </p>
                <button class="btn btn-md btn-primary" style="margin: 30px 0 40px 0;">ПЕРЕЙТИ</button>
            </div>
            <div class="col-md-2 text-center">
                <img style="width: 100%" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Services/Services2.svg"/>
                <h5 style="color: #ffffff; margin-bottom: 3px;  font-weight: 700;">ОПТИМИЗАЦИЯ ДЛЯ ПОИСКОВЫХ СИСТЕМ</h5>
                <p style="color: #ffffff;">
                    It takes input in the form of a hex color code value and converts that value to a RGB value that can be used to specify color in photo editing software.
                </p>
                <button class="btn btn-md btn-primary" style="margin: 30px 0 40px 0;">ПЕРЕЙТИ</button>
            </div>
            <div class="col-md-2 text-center">
                <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Services/Services3.svg"/>
                <h5 style="color: #ffffff; font-weight: 700; padding-top: 7px;">ИНТЕРНЕТ МАРКЕТИНГ</h5>
                <p style="color: #ffffff;">
                    It takes input in the form of a hex color code value and converts that value to a RGB value that can be used to specify color in photo editing software.
                </p>
                <button class="btn btn-md btn-primary" style="margin: 30px 0 40px 0;">ПЕРЕЙТИ</button>
            </div>
        </div>
    </div>

    <div class="main-header-service">
        <section id="ex1" class="row" style="width: 100%; padding: 0; margin: 0;">
            <article  class="col-md-6 col-md-offset-6 post last" style="display: block; height: 740px; background-color: #ffffff; opacity: 0.9;">
                <h1>ЗАГОЛОВОК В ДВЕ СТРОКИ</h1>
                <button class="btn btn-md btn-warning" style="margin-bottom: 30px;">НАЧАТЬ ПРОДВИЖЕНИЕ</button>
            </article>
        </section>
    </div>
    <div class="main-clients">
        <div class="container">
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col-md-2 col-md-offset-1">
                    <img style="width: 100px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Clients/1client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Clients/2client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Clients/3client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Clients/4client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Clients/5client.svg"/>
                </div>
            </div>
        </div>
    </div>
    <div class="main-sites" style="padding: 0; margin: 0!important;">
        <div class="container">
            <div id="ex2" class="row">
                    <article  class="col-md-6 post last" style="display: block; height: 740px; background-color: #ffffff; opacity: 0.9;">
                        <h1>МЫ ДЕЛАЕМ САЙТЫ, КОТОРЫЕ СОБИРАЮТ ТРАФИК.</h1>
                        <button class="btn btn-md btn-warning" style="margin-bottom: 30px;">НАЧАТЬ РАЗРАБОТКУ</button>
                    </article>
                <div class="col-md-6" >
                    <div class="row">
                        <div class="col-md-6" style="padding-left: 0; padding-right: 0;">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Sites/sites1.svg"/>
                        </div>
                        <div class="col-md-6" style="padding-left: 0; padding-right: 0;">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Sites/sites2.svg"/>
                        </div>
                        <div class="col-md-6" style="padding-left: 0; padding-right: 0;">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Sites/sites3.svg"/>
                        </div>
                        <div class="col-md-6" style="padding-left: 0; padding-right: 0;">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Sites/sites4.svg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-how-we-work" style="padding: 0; margin: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 20px !important;">
                    <h1 style="color: #ffffff;">КАК МЫ РАБОТАЕМ</h1>
                </div>
                <div id="ex3" class="col-md-10 col-md-offset-1 ">
                    <div class="row post last">
                        <div class="col-md-8" style="margin-top: 20px !important;">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Howtoweworks/howweworks1.svg"/>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px !important;">
                            <h2 style="color: #ffffff;">ВЫЗОВ</h2>
                            <button class="btn btn-md btn-warning" style="margin-bottom: 30px;">БРОСИТЬ ВЫЗОВ</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-8 col-md-push-4" style="margin-top: 30px !important;">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Howtoweworks/howweworks2.svg"/>
                        </div>
                        <div class="col-md-4 col-sm-pull-8" style="margin-top: 20px !important;">
                            <h2 style="color: #ffffff;">РЕШЕНИЕ</h2>
                            <button class="btn btn-md btn-warning" style="margin-bottom: 30px;">РЕШИТЬ МОИ ПРОБЛЕМЫ</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-8" style="margin-top: 30px !important; margin-bottom: 30px !important;">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Howtoweworks/howweworks3.svg"/>
                        </div>
                        <div class="col-md-4" style="margin-top: 30px !important; margin-bottom: 30px !important;">
                            <h2 style="color: #ffffff;">РЕЗУЛЬТАТЫ</h2>
                            <button class="btn btn-md btn-warning" style="margin-bottom: 30px;">ХОЧУ РЕЗУЛЬТАТЫ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-result" style="padding: 0; margin: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top: 20px !important; margin-bottom: 30px;">
                    <h1>РЕЗУЛЬТАТЫ</h1>
                </div>
                <div class="col-md-6">
                    <div class="row" style="padding-top: 30px;">
                        <div class="col-xs-12">
                            <p style="color: #009444; font-size: 64px;">2563%</p>
                        </div>
                        <div class="col-xs-12">
                            <p style="color: #009444; font-size: 64px;">75%</p>
                        </div>
                        <div class="col-xs-12">
                            <p style="color: #009444; font-size: 64px;">390%</p>
                        </div>
                        <div class="col-xs-12">
                            <p style="color: #009444; font-size: 64px;">1985%</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width: 100%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Results/result1.png"/>
                        </div>
                        <div class="col-sm-8">
                            <h5 style="padding-top: 15px;">Компания</h5>
                            <h3 style="margin-bottom: 0;">Фамилия</h3>
                            <h3 style="margin-top: 0;">Имя Отчество</h3>
                            <h5>Должность</h5>
                        </div>
                        <div class="col-sm-12">
                            <img style="width: 80px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Results/covichki-29.svg"/>
                        </div>
                        <div class="col-sm-12" style="height: 80px;">

                        </div>
                        <div class="col-sm-12 text-right">
                            <img style="width: 80px;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Results/covichki-30.svg"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center" style="margin-top: 30px !important;">
                    <button class="btn btn-md btn-warning" style="margin-bottom: 40px;">СМОТРЕТЬ ВИДЕООТЗЫВ</button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-about" style="padding: 0; margin: 0!important;">
        <div id="ex4" class="container">
            <div class="row post last" style="padding-top: 50px; padding-bottom: 40px;">
                <div class="col-md-5">
                    <img style="width: 80%;" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Aboutus/Logo-31.svg"/>
                </div>
                <div class="col-md-7">
                    <h1>НЕМНОГО О НАС</h1>
                    <button class="btn btn-md btn-warning">УЗНАТЬ БОЛЬШЕ</button>
                </div>
            </div>
        </div>
    </div>
</div>
