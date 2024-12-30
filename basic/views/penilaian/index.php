<?php

use app\models\Penilaian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PenilaianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-index">

    <!-- Title Section -->
    <div class="text-center mt-5 mb-4">
        <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
        <p class="lead text-muted">Kelola dan lihat data penilaian lembaga</p>
    </div>

    <!-- Create Button -->
    <p class="text-center">
        <?= Html::a('Create Penilaian', ['create'], ['class' => 'btn btn-primary btn-lg animated animate__fadeInUp']) ?>
    </p>

    <!-- Grid View Section -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'prodi_id_prodi',
            'indikator_id_indikator',
            'tahun',
            'nilai',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penilaian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'prodi_id_prodi' => $model->prodi_id_prodi, 'indikator_id_indikator' => $model->indikator_id_indikator, 'tahun' => $model->tahun]);
                 }
            ],
        ],
        'tableOptions' => ['class' => 'table table-striped table-hover'],
    ]); ?>

</div>

<!-- Add Font Awesome and Animate.css for better effects -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Custom Styling and Animations -->
<style>
    /* Title and Button Styling */
    .penilaian-index h1 {
        font-size: 36px;
        color: #2c3e50;
        font-weight: bold;
    }

    .penilaian-index p {
        font-size: 18px;
        color: #7f8c8d;
    }

    .btn-lg {
        font-size: 18px;
        padding: 15px 30px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
    }

    .btn-primary:hover {
        background-color: #2980b9;
        border-color: #2980b9;
    }

    /* GridView Styling */
    .table {
        border-radius: 10px;
        overflow: hidden;
    }

    .table-striped tbody tr:nth-child(odd) {
        background-color: #f7f7f7;
    }

    .table-hover tbody tr:hover {
        background-color: #ecf0f1;
        cursor: pointer;
    }

    .table td, .table th {
        padding: 15px;
        text-align: center;
    }

    .table th {
        background-color: #34495e;
        color: white;
    }

    /* Animation for GridView Rows */
    .grid-view .table tr {
        opacity: 0;
        animation: fadeInUp 0.5s forwards;
    }

    .grid-view .table tr:nth-child(odd) {
        animation-delay: 0.2s;
    }

    .grid-view .table tr:nth-child(even) {
        animation-delay: 0.4s;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- jQuery for additional effects (optional) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // You can add more interactivity here if needed (optional)
</script>
