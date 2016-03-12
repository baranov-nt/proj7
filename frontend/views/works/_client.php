<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 12.03.2016
 * Time: 10:47
 */
use yii\bootstrap\Modal;
use yii\bootstrap\Html;
?>
<?php
$i = 0;
while($i < 12):
    $i++;
?>
<div class="col-sm-3 col-xs-6">
    <div class="clients-container">
        <img class="clients-container-image" src="<?= Yii::$app->urlManager->baseUrl ?>/images/Works/w2.png"/>
        <div class="clients-container-active-content">
            <div class="clients-container-active-content-inside">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <button class="btn clients-btn-transparent" data-toggle="modal" data-target="#modal-<?= $i ?>">
                            <span class="glyphicon glyphicon-eye-open clients-glyphicon"></span>
                        </button>
                    </div>
                    <div class="col-xs-12 text-center" style="padding-top: 20px;">
                        <?= Html::a('<span class="glyphicon glyphicon-link clients-glyphicon"></span>', ['/'], ['class' => 'btn clients-btn-transparent', 'target' => '_blank']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php Modal::begin([
        'id' => 'modal-'.$i,
        'header' => '<h2>Клиент '.$i.'</h2>',
        'toggleButton' => false,
    ]);
    echo 'Контент '.$i;
    Modal::end(); ?>
</div>
<?php
endwhile;
?>
