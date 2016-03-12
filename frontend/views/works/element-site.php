<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 12.03.2016
 * Time: 15:30
 */
use yii\bootstrap\Carousel;
use yii\bootstrap\Html;
?>
<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 style="text-transform: uppercase;">Название организации</h2>
        </div>
        <div class="col-md-12 text-center" style="margin-bottom: 20px;">
            <?= Html::a('Сайт', ['/works/element-site'], ['class' => 'btn btn-sm btn-warning']) ?>
            <?= Html::a('Продвижение', ['/works/element-promotion'], ['class' => 'btn btn-sm btn-default']) ?>
        </div>
        <div class="col-md-12 text-center" style="margin-bottom: 10px;">
            <?= Html::a('www.example.com', ['/#'], ['class' => '']) ?>
        </div>
        <div class="col-xs-2 col-sm-1 col-sm-offset-3 vcenter text-right">
            <span class="fa fa-angle-left circle-sm" href="#w0" data-slide="prev" style="cursor: pointer; "></span>
        </div>
        <div class="col-xs-8 col-sm-4 vcenter">
            <?php
            echo Carousel::widget([
                'items' => [
                    '<img style="width: 100%" src="'.Yii::$app->urlManager->baseUrl.'/images/Carousel/carousel_1.jpg'.'"/>',
                    '<img style="width: 100%" src="'.Yii::$app->urlManager->baseUrl.'/images/Carousel/carousel_2.jpg'.'"/>',
                    '<img style="width: 100%" src="'.Yii::$app->urlManager->baseUrl.'/images/Carousel/carousel_3.jpg'.'"/>',
                ],
                //'showIndicators' => false,
                'controls' => false,
                'options' =>  [
                    'class' => 'carousel slide'
                ]
            ]);
            ?>
        </div>
        <div class="col-xs-1 col-sm-1 vcenter">
            <span class="fa fa-angle-right circle-sm" href="#w0" data-slide="next" style="cursor: pointer;"></span>
        </div>
        <div class="col-md-12 text-center" style="margin-bottom: 10px; margin-top: 20px;">
            <p style="padding: 0 !important; margin: 0 !important;">Релиз:</p>
            <p style="padding: 0 !important; margin: 0 !important; font-size: 16px; font-weight: 700;">март 2016</p>
        </div>
        <div class="col-md-12 text-center" style="margin-bottom: 20px;">
            <p style="padding: 0 !important; margin: 0 !important;">Креативный директор:</p>
            <p style="padding: 0 !important; margin: 0 !important; font-size: 16px; font-weight: 700;">Шелковый Кирилл</p>
        </div>
        <div class="col-md-12 text-center" style="margin-bottom: 20px;">
            <button class="btn btn-warning">Хочу такой же сайт!</button>
        </div>
    </div>
</div>