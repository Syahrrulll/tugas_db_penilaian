<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Akreditasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akreditasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prodi_id_prodi')->textInput() ?>

    <?= $form->field($model, 'lembaga_id_lembaga')->textInput() ?>

    <?= $form->field($model, 'akreditasi_id')->textInput() ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_mulai')->textInput() ?>

    <?= $form->field($model, 'tanggal_akhir')->textInput() ?>

    <?= $form->field($model, 'no_sk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lembaga_akreditasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akreditasicol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
