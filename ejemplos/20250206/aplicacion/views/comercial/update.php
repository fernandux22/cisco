<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Comercial $model */

$this->title = 'Update Comercial: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comercials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comercial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
