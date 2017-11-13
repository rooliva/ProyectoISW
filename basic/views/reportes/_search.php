<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReporteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reporte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_reporte') ?>

    <?= $form->field($model, 'nombre_reporte') ?>

    <?= $form->field($model, 'fecha_reporte') ?>

    <?= $form->field($model, 'grupo') ?>

    <?= $form->field($model, 'tipo_reporte') ?>

    <?php // echo $form->field($model, 'categoria') ?>

    <?php // echo $form->field($model, 'recurso_servicio') ?>

    <?php // echo $form->field($model, 'ubicacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
