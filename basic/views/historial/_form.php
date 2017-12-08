<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Historial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header">
        <h4><?=$model->isNewRecord ? 'Crear' : 'Modificar'?> Historial</h4>
    </div>
    <div class="card-body">
        <div class="historial-form">

            <?php $form = ActiveForm::begin(); ?>


            <?= $form->field($model, 'id_reporte')->dropDownList(ArrayHelper::map($model_reporte->find()->all(), 'id_reporte', 'nombre_reporte')) ?>

            <?php
            echo $form->field($model, 'estado')->dropDownList([
            	'1' => 'Largo aliento', 
            	'2' => 'En curso',
            	'3' => 'Terminado'],['prompt'=>'Seleccionar','required'=> true]);
        	?>

            <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true,'required'=> true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
  </div>
</div>
