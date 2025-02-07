<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Comercial $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="comercial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comisión')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
