<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidop_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidom_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rut_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_personal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
