<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_personal') ?>

    <?= $form->field($model, 'id_usuario') ?>

    <?= $form->field($model, 'nombre_personal') ?>

    <?= $form->field($model, 'apellidop_personal') ?>

    <?= $form->field($model, 'apellidom_personal') ?>

    <?php // echo $form->field($model, 'cargo_personal') ?>

    <?php // echo $form->field($model, 'correo_personal') ?>

    <?php // echo $form->field($model, 'rut_personal') ?>

    <?php // echo $form->field($model, 'tipo_reporte') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
