<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Elemen $model */

$this->title = 'Create Elemen';
$this->params['breadcrumbs'][] = ['label' => 'Elemens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="elemen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
