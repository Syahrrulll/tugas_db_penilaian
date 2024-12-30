<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Penilaian $model */

$this->title = $model->prodi_id_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'prodi_id_prodi' => $model->prodi_id_prodi, 'indikator_id_indikator' => $model->indikator_id_indikator, 'tahun' => $model->tahun], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'prodi_id_prodi' => $model->prodi_id_prodi, 'indikator_id_indikator' => $model->indikator_id_indikator, 'tahun' => $model->tahun], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'prodi_id_prodi',
            'indikator_id_indikator',
            'tahun',
            'nilai',
        ],
    ]) ?>

</div>
