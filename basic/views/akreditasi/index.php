<?php

use app\models\Akreditasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akreditasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akreditasi-index">

    <!-- Title and Description with Animation -->
    <div class="text-center mt-5 mb-5 animated fadeIn">
        <h1 class="display-4"><?= Html::encode($this->title) ?></h1>
        <p class="lead">Kelola dan lihat data akreditasi lembaga</p>
    </div>

    <!-- Create Button with FadeIn Animation -->
    <p class="text-center animated fadeInUp">
        <?= Html::a('<i class="fas fa-plus-circle"></i> Create Akreditasi', ['create'], ['class' => 'btn btn-primary btn-lg']) ?>
    </p>

    <!-- Grid View with Animation on Rows -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'prodi_id_prodi',
            'lembaga_id_lembaga',
            'akreditasi_id',
            'id',
            'tanggal_mulai',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Akreditasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'prodi_id_prodi' => $model->prodi_id_prodi, 'lembaga_id_lembaga' => $model->lembaga_id_lembaga, 'id' => $model->id]);
                },
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::a('<i class="fas fa-eye"></i>', $url, ['class' => 'btn btn-info btn-sm']);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::a('<i class="fas fa-edit"></i>', $url, ['class' => 'btn btn-warning btn-sm']);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<i class="fas fa-trash-alt"></i>', $url, [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],
            ],
        ],
        'tableOptions' => ['class' => 'table table-bordered table-striped'],
        'rowOptions' => function ($model, $index, $widget, $grid) {
            return [
                'class' => $index % 2 === 0 ? 'bg-light animated fadeInUp' : 'bg-secondary animated fadeInUp', // Animation on rows
            ];
        },
    ]); ?>

</div>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Add custom CSS for animations -->
<style>
    /* General page styling */
    .akreditasi-index {
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    h1 {
        color: #343a40; /* Dark text color for title */
        font-size: 36px;
        font-weight: 700;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 12px 20px;
        font-size: 18px;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        color: #343a40; /* Dark text for table content */
    }

    .table th, .table td {
        text-align: center;
        padding: 15px 20px;
        vertical-align: middle;
    }

    .table th {
        background-color: #343a40; /* Dark header */
        color: #f8f9fa; /* Light text for header */
        font-weight: bold;
    }

    .table-striped tbody tr:nth-child(even) {
        background-color: #f8f9fa; /* Lighter background for even rows */
    }

    .table-bordered {
        border: 1px solid #ddd;
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #ddd;
    }

    .btn-sm {
        padding: 8px 12px;
        font-size: 13px;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-sm:hover {
        opacity: 0.8;
    }

    /* Subtle fade-in animation for the page load */
    .akreditasi-index {
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Add fade-in-up animation to buttons and rows */
    .fadeInUp {
        opacity: 0;
        animation: fadeInUp 0.8s forwards;
    }

    @keyframes fadeInUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

<!-- Optional: You can add more subtle animations if needed -->
<script>
    $(document).ready(function() {
        $('.akreditasi-index').fadeTo(1000, 1); // Smooth fade-in effect on page load
    });
</script>
