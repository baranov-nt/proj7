<?php
use frontend\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
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
            <button class="btn btn-success btn-lg" style="float: left">Закажи звонок</button>
            <div style=" font-size: 30px; line-height: 32px; text-align: right;">
                <img style="width: 22px; margin: 0 !important; padding-bottom: 4px;" src="/images/Header/call.svg"/> 555-55-55</div>
            <div style="font-size: 10px; text-transform: none; text-align: right;">Екатеринбург, Машиностроителей 9</div>
        </div>
        <?php
        NavBar::end();
        ?>
            <?= Alert::widget() ?>
            <?= $content ?>
    </div>

    <footer class="footer" style="background-color: #337ab7; max-height: 100%; margin-top: 70px !important;">
        <div class="container" >
            <span class="badge badge-primary">
                <span class="glyphicon glyphicon-copyright-mark"></span> <?= Yii::$app->name.' '.date('Y') ?>
            </span>
        </div>
    </footer>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php
$this->endPage();