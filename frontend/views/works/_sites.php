<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 12.03.2016
 * Time: 13:53
 */
use yii\bootstrap\Html;

$i = 0;
while($i < 4):
$i++;
?>
<div class="col-sm-6" style="margin-bottom: 20px;">
    <div class="img-container">
        <img class="img-container-image" src="<?= Yii::$app->urlManager->baseUrl.'/images/Works/w_temp.png' ?>"/>
        <div class="img-container-content">LOBSTER STUDIO</div>
        <div class="img-container-active-content">
            <div class="img-container-active-content-inside">
                <p>LOBSTER STUDIO</p>
                <div class="row">
                    <div class="col-xs-6">
                        <?= Html::a('СМОТРЕТЬ', ['/works/element-site'], ['class' => 'btn btn-transparent']) ?>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-transparent">НА САЙТ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
endwhile;
?>