<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Akreditasi $model */

$this->title = $model->prodi_id_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Akreditasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="akreditasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'prodi_id_prodi' => $model->prodi_id_prodi, 'lembaga_id_lembaga' => $model->lembaga_id_lembaga, 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'prodi_id_prodi' => $model->prodi_id_prodi, 'lembaga_id_lembaga' => $model->lembaga_id_lembaga, 'id' => $model->id], [
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
            'lembaga_id_lembaga',
            'akreditasi_id',
            'id',
            'tanggal_mulai',
            'tanggal_akhir',
            'no_sk',
            'lembaga_akreditasi',
            'akreditasicol',
            'file',
        ],
    ]) ?>

</div>
