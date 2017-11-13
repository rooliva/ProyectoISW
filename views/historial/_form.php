<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Historial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historial-form">

    <?php $form = ActiveForm::begin(); ?>


	<?= $form->field($model, 'id_historial')->textInput(['maxlength' => true,'required'=> true]) ?>

    <?= ($form->field($model, 'id_reporte'))->textInput(['required'=> true]) ?>


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
