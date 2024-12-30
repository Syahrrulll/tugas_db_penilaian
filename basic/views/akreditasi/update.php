<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Akreditasi $model */

$this->title = 'Update Akreditasi: ' . $model->prodi_id_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Akreditasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prodi_id_prodi, 'url' => ['view', 'prodi_id_prodi' => $model->prodi_id_prodi, 'lembaga_id_lembaga' => $model->lembaga_id_lembaga, 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akreditasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
