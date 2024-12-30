<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Penilaian $model */

$this->title = 'Update Penilaian: ' . $model->prodi_id_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prodi_id_prodi, 'url' => ['view', 'prodi_id_prodi' => $model->prodi_id_prodi, 'indikator_id_indikator' => $model->indikator_id_indikator, 'tahun' => $model->tahun]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
