<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Historial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historial-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_reporte')->dropDownList(ArrayHelper::map($model_reporte->find()->all(), 'id_reporte', 'nombre_reporte'),['prompt'=>'Seleccionar','required'=> true]); 
    ?>


    <?php
    echo $form->field($model, 'estado')->dropDownList([
    	'Largo aliento' => 'Largo aliento', 
    	'En curso' => 'En curso',
    	'Terminado' => 'Terminado'],['prompt'=>'Seleccionar','required'=> true]);
	?>

   
    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true,'required'=> true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
