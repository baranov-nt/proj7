<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 16.02.2016
 * Time: 11:32
 */
/* @var $widget \common\widgets\WorksLeftBlock\CallBack */
/* @var $modelCallBackForm \common\models\CallBackForm */

use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\bootstrap\Html;
use yii\widgets\MaskedInput;
?>
<button class="btn btn-success btn-md" style="float: left; margin-right: 10px;" data-toggle="modal" data-target="#modal-callback">Закажи звонок</button>
<div style="color: #000000; text-transform: none;">
    <?php Modal::begin([
        'id' => 'modal-callback',
        'header' => '<h2>Заказать обратный звонок</h2>',
        'toggleButton' => false,
        'closeButton' => [
            'onclick' => ''
        ]
    ]);
    ?>
    <?php $form = ActiveForm::begin([
        'id' => 'callback-form'
    ]); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($modelCallBackForm, 'phone')->widget(MaskedInput::className(),[
                'name' => 'phone',
                'mask' => '+7 (999) 999-9999',
                'options' => [
                    'placeholder' => '+7 (999) 999-9999',
                    'class' => 'form-control'
                ]]); ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($modelCallBackForm, 'name') ?>
        </div>

        <div class="col-sm-12">
            <div style="color:#999;margin:1em 0">
                Мы с вами свяжемся в ближайшее время.
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <?= Html::submitButton('Заказать звонок', ['class' => 'btn btn-warning', 'name' => 'login-button']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
    <?php
    Modal::end(); ?>
</div>
