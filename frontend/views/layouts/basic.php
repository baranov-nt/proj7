<?php
use frontend\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\helpers\Url;
use common\widgets\FontAwesome\AssetBundle;

/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 28.02.2015
 * Time: 1:48
 */
/* @var $content string
 * @var $this \yii\web\View */
AppAsset::register($this);
AssetBundle::register($this);

$this->beginPage();
?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <?= Html::csrfMetaTags() ?>
        <meta charset="<?= Yii::$app->charset ?>">
        <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
        <title><?= $this->title ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>

    <div class="wrap">
        <?php
        NavBar::begin(
            [
                'options' => [
                    'class' => 'navbar navbar-default',
                    'id' => 'main-menu'
                ],
                'renderInnerContainer' => true,
                'innerContainerOptions' => [
                    'class' => 'container'
                ],
                'brandLabel' => '<img style="width: 100%;" src="/images/Header/Logoheader.svg"/>',
                'brandUrl' => [
                    '/site/index'
                ],
                'brandOptions' => [
                    'class' => 'navbar-brand logo-brand',
                    'style' => ''
                ]
            ]
        );

        $menuItems = [
            [
                'label' => Yii::t('app', 'О нас'),
                'url' => Url::to(['/#']),
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Услуги'),
                'url' => Url::to(['/#']),
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Работы'),
                'url' => Url::to(['/#']),
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Блог'),
                'url' => Url::to(['/#']),
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Контакты'),
                'url' => Url::to(['/#']),
                'linkOptions' => [

                ]
            ],
        ];

        echo Nav::widget([
            'items' => $menuItems,
            'activateParents' => true,
            'encodeLabels' => false,
            'options' => [
                'class' => 'navbar-nav',
                'style' => 'padding: 30px 0 0 0;'
            ]
        ]);
        ?>

        <div class="navbar-nav navbar-right" style="display: block; color: #ffffff; padding: 20px 0 10px 10px; width: 350px;">
            <button class="btn btn-success btn-md" style="float: left; margin-right: 10px;">Закажи звонок</button>
            <div style=" font-size: 28px; line-height: 28px; text-align: right;">
                <img style="width: 22px; margin: 0 !important; padding-bottom: 4px;" src="/images/Header/call.svg"/> 555-55-55</div>
            <div style="font-size: 10px; text-transform: none; text-align: right;">Екатеринбург, Машиностроителей, 9</div>
        </div>
        <?php
        NavBar::end();
        ?>
            <?= Alert::widget() ?>
            <?= $content ?>
    </div>

    <footer style="background-color: #414042; color: #ffffff;  padding: 30px 0 20px 0;">
        <div class="container" style="background-color: #414042;">
            <div class="row" >
                <div class="col-md-2">
                    <a href="/#" class="footer-link"><h4 style="margin: 0;">О НАС</h4></a>
                    <a href="/#" class="footer-link">Компания</a><br>
                    <a href="/#" class="footer-link">Команда</a><br>
                    <a href="/#" class="footer-link">Партнеры</a><br>
                    <a href="/#" class="footer-link">Заслуги</a><br>
                    <a href="/#" class="footer-link"><h4 style="margin-top: 40px;">БЛОГ</h4></a>
                </div>
                <div class="col-md-3">
                    <a href="/#" class="footer-link"><h4 style="margin: 0;">УСЛУГИ</h4></a>
                    <a href="/#" class="footer-link">Разработка сайта "под ключ"</a><br>
                    <a href="/#" class="footer-link">Разработка Landing page</a><br>
                    <a href="/#" class="footer-link">Оптимизация для поисковых систем</a><br>
                    <a href="/#" class="footer-link">Оптимизация для социальных медиа</a><br>
                    <a href="/#" class="footer-link">Аудит сайта</a><br>
                    <a href="/#" class="footer-link">Е-майл маркетинг</a><br>
                    <a href="/#" class="footer-link">One click маркетинг</a><br>
                </div>
                <div class="col-md-3">
                    <a href="/#" class="footer-link"><h4 style="margin: 0;">ПОРТФОЛИО</h4></a>
                    <a href="/#" class="footer-link">Клиенты</a><br>
                    <a href="/#" class="footer-link">Сайты</a><br>
                    <a href="/#" class="footer-link">Landing page</a><br>
                    <a href="/#" class="footer-link">Видеорекомендации</a><br>
                    <a href="/#" class="footer-link"><h4 style="margin-top: 40px;">КОНТАКТЫ</h4></a>
                </div>
                <div class="col-md-4" style="">
                    <div style="width: 85%;">
                    <img style="width: 100%; padding-bottom: 10px; background-color: #414042;" src="/images/Header/Logoheader.svg"/><br>
                    <a href="/#"><i class="fa fa-facebook circle"></i></a>
                    <a href="/#"><i class="fa fa-twitter circle"></i></a>
                    <a href="/#"><i class="fa fa-instagram circle"></i></a>
                    <a href="/#"><i class="fa fa-vk circle"></i></a>
                    <a href="/#"><i class="fa fa-linkedin circle"></i></a>
                    <p class="text-right" style="margin-top: 20px; margin-bottom: 0; padding-bottom: 0;">8(343)555-55-55</p>
                    <p class="text-right" style="margin-top: 0; padding-top: 0;">Екатеринбург, Машиностроителей, 9</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php
$this->endPage();