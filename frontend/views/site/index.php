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
                    <img style="width: 100px;" src="images/Mainbanner/logobanner.svg"/>
                </div>
                <div class="col-md-4 col-md-offset-4 text-center" style="color: #ffffff; padding-top: 40px;">
                    <p>Мы поставим ваш бизнес на лидирующие позиции.</p>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center" style="color: #ffffff; padding-top: 80px; text-shadow: 1px 1px 2px black, 0 0 1em grey;">
                    <h2>Закажите бессплатный аудит для вашего сайта.</h2>
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
                                'Заказать бессплатный аудит',
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
    <div class="main-services">
        <div class="row" style="width: 100%">
            <div class="col-md-12 text-center" style="color: #ffffff; padding-top: 10px;">
                <h3>НАШИ УСЛУГИ</h3>
            </div>
            <div class="col-md-2 col-md-offset-3 text-center">
                <img style="width: 100%" src="/images/Services/Services1.svg"/>
                <h5 style="color: #ffffff; font-weight: 700; padding-top: 7px;">РАЗРАБОТКА САЙТОВ</h5>
                <p style="color: #ffffff;">
                    It takes input in the form of a hex color code value and converts that value to a RGB value that can be used to specify color in photo editing software.
                </p>
                <button class="btn btn-primary" style="margin: 30px 0 40px 0;">ПЕРЕЙТИ</button>
            </div>
            <div class="col-md-2 text-center">
                <img style="width: 100%" src="/images/Services/Services2.svg"/>
                <h5 style="color: #ffffff; margin-bottom: 3px;  font-weight: 700;">ОПТИМИЗАЦИЯ ДЛЯ ПОИСКОВЫХ СИСТЕМ</h5>
                <p style="color: #ffffff;">
                    It takes input in the form of a hex color code value and converts that value to a RGB value that can be used to specify color in photo editing software.
                </p>
                <button class="btn btn-primary" style="margin: 30px 0 40px 0;">ПЕРЕЙТИ</button>
            </div>
            <div class="col-md-2 text-center">
                <img style="width: 100%;" src="/images/Services/Services3.svg"/>
                <h5 style="color: #ffffff; font-weight: 700; padding-top: 7px;">ИНТЕРНЕТ МАРКЕТИНГ</h5>
                <p style="color: #ffffff;">
                    It takes input in the form of a hex color code value and converts that value to a RGB value that can be used to specify color in photo editing software.
                </p>
                <button class="btn btn-primary" style="margin: 30px 0 40px 0;">ПЕРЕЙТИ</button>
            </div>
        </div>
    </div>

    <div class="separator"></div>
    <div class="main-header-service">
        <section id="ex1" class="row" style="width: 100%; padding: 0; margin: 0;">
            <article  class="col-md-6 col-md-offset-6 post last" style="display: block; height: 740px; background-color: #ffffff; opacity: 0.9;">

            </article>
        </section>
    </div>
    <div class="main-clients">
        <div class="container">
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col-md-2 col-md-offset-1">
                    <img style="width: 100px;" src="images/Clients/1client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="images/Clients/2client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="images/Clients/3client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="images/Clients/4client.svg"/>
                </div>
                <div class="col-md-2">
                    <img style="width: 100px;" src="images/Clients/5client.svg"/>
                </div>
            </div>
        </div>
    </div>
</div>
