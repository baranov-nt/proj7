<?php
use frontend\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\helpers\Url;
use common\widgets\FontAwesome\AssetBundle;
use common\widgets\CallBack\CallBack;

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
                'brandLabel' => '<img style="width: 100%;" src="'.Yii::$app->urlManager->baseUrl.'/images/Header/Logoheader.svg"/>',
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
                'url' => Url::to(['/about/index']),
                'active' => Yii::$app->controller->id == 'about',
                /*'items' => [
                    [
                        'label' => 'Компания',
                        'url' => Url::to(['/about/company']),
                        //'active' => Yii::$app->controller->action->id == 'service'
                    ],
                    [
                        'label' => 'Команда',
                        'url' => Url::to(['/about/command']),
                        //'active' => Yii::$app->controller->action->id == 'service'
                    ],
                    [
                        'label' => 'Партнеры',
                        'url' => Url::to(['/about/partners']),
                        //'active' => Yii::$app->controller->action->id == 'service'
                    ],
                    [
                        'label' => 'Заслуги',
                        'url' => Url::to(['/about/merits']),
                        //'active' => Yii::$app->controller->action->id == 'service'
                    ],
                ],*/
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Услуги'),
                'url' => Url::to(['/service/index']),
                'active' => Yii::$app->controller->id == 'service',
                /*'items' => [
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
                ],*/
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Работы'),
                'url' => Url::to(['/works/index']),
                'active' => Yii::$app->controller->id == 'works',
                /*'items' => [
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
                ],*/
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Блог'),
                'url' => Url::to(['/site/blog']),
                'linkOptions' => [

                ]
            ],
            [
                'label' => Yii::t('app', 'Контакты'),
                'url' => Url::to(['/site/contact']),
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
            <?= CallBack::widget() ?>
            <div style=" font-size: 28px; line-height: 28px; text-align: right;">
                <img style="width: 22px; margin: 0 !important; padding-bottom: 4px;" src="<?= Yii::$app->urlManager->baseUrl.'/images/Header/call.svg' ?>"/> 555-55-55</div>
            <div style="font-size: 10px; text-transform: none; text-align: right;">Екатеринбург, Машиностроителей, 9</div>
        </div>
        <?php
        NavBar::end();
        ?>
            <?= Alert::widget() ?>
            <?= $content ?>
    </div>
    <footer style="background-color: #414042; color: #ffffff;  padding: 20px 0 0 0;">
        <div class="container" style="background-color: #414042;">
            <div class="row" >
                <div class="col-md-2" style="padding-bottom: 20px;">
                    <a href="<?= Url::to(['/about/index']) ?>" class="footer-link"><h4 style="margin: 0;">О НАС</h4></a>
                    <a href="<?= Url::to(['/about/company']) ?>" class="footer-link">Компания</a><br>
                    <a href="<?= Url::to(['/about/command']) ?>" class="footer-link">Команда</a><br>
                    <a href="<?= Url::to(['/about/partners']) ?>" class="footer-link">Партнеры</a><br>
                    <a href="<?= Url::to(['/about/merits']) ?>" class="footer-link">Заслуги</a><br>
                    <a href="<?= Url::to(['/site/blog']) ?>" class="footer-link"><h4 style="margin-top: 40px;">БЛОГ</h4></a>
                </div>
                <div class="col-md-3" style="padding-bottom: 20px;">
                    <a href="<?= Url::to(['/service/index']) ?>" class="footer-link"><h4 style="margin: 0;">УСЛУГИ</h4></a>
                    <a href="<?= Url::to(['/service/site-development']) ?>" class="footer-link">Разработка сайта "под ключ"</a><br>
                    <a href="<?= Url::to(['/service/landing-page']) ?>" class="footer-link">Разработка Landing page</a><br>
                    <a href="<?= Url::to(['/service/search-optimization']) ?>" class="footer-link">Оптимизация для поисковых систем</a><br>
                    <a href="<?= Url::to(['/service/media-optimization']) ?>" class="footer-link">Оптимизация для социальных медиа</a><br>
                    <a href="<?= Url::to(['/service/site-audit']) ?>" class="footer-link">Аудит сайта</a><br>
                    <a href="<?= Url::to(['/service/email-marketing']) ?>" class="footer-link">Е-майл маркетинг</a><br>
                    <a href="<?= Url::to(['/service/one-click-marketing']) ?>" class="footer-link">One click маркетинг</a><br>
                </div>
                <div class="col-md-3" style="padding-bottom: 20px;">
                    <a href="<?= Url::to(['/works/index']) ?>" class="footer-link"><h4 style="margin: 0;">ПОРТФОЛИО</h4></a>
                    <a href="<?= Url::to(['/works/clients']) ?>" class="footer-link">Клиенты</a><br>
                    <a href="<?= Url::to(['/works/sites']) ?>" class="footer-link">Сайты</a><br>
                    <a href="<?= Url::to(['/works/our-landing-page']) ?>" class="footer-link">Landing page</a><br>
                    <a href="<?= Url::to(['/works/video-recommendations']) ?>" class="footer-link">Видеорекомендации</a><br>
                    <a href="<?= Url::to(['/site/contact']) ?>" class="footer-link"><h4 style="margin-top: 40px;">КОНТАКТЫ</h4></a>
                </div>
                <div class="col-md-4" style="padding-bottom: 20px;">
                    <div style="width: 85%;">
                    <img style="width: 100%; padding-bottom: 10px; background-color: #414042;" src="<?= Yii::$app->urlManager->baseUrl.'/images/Header/Logoheader.svg' ?>"/><br>
                    <a href="/#"><i class="fa fa-facebook circle"></i></a>
                    <a href="/#"><i class="fa fa-twitter circle"></i></a>
                    <a href="/#"><i class="fa fa-instagram circle"></i></a>
                    <a href="/#"><i class="fa fa-vk circle"></i></a>
                    <a href="/#"><i class="fa fa-linkedin circle"></i></a>
                    <p class="text-right" style="margin-top: 20px; margin-bottom: 0; padding-bottom: 0;">8(343)555-55-55</p>
                    <p class="text-right" style="margin-top: 0; padding-top: 0; font-size: 12px;">Екатеринбург, Машиностроителей, 9</p>
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