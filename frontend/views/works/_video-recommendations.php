<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 12.03.2016
 * Time: 14:02
 */
use yii\bootstrap\Modal;
use vision\ytbwidget\YouTube;

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
                            <button class="btn btn-transparent" data-toggle="modal" data-target="#modal-<?= $i ?>">СМОТРЕТЬ</button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn btn-transparent">НА САЙТ</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php Modal::begin([
                'id' => 'modal-'.$i,
                'header' => '<h2>Видео '.$i.'</h2>',
                'toggleButton' => false,
                'closeButton' => [
                    'onclick' => ''
                ]
            ]);
            ?>
            <div style="width: 100% !important;">
                <?= YouTube::widget([
                    'videoId' => 'diDJV_7EmDk',
                    'divId' => 'myDiv'.$i,
                    'class' => 'videoYouTube'
                ]);
                ?>
            </div>
            <?php
            Modal::end(); ?>
        </div>
    </div>
    <?php
endwhile;
?>