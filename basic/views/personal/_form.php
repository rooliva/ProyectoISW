<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use sateler\rut\RutWidgetAsset;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-header">
        <h4><?=$model->isNewRecord ? 'Crear' : 'Modificar'?> Personal</h4>
    </div>
    <div class="card-body">
        <div class="personal-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'id_usuario')->dropDownList(ArrayHelper::map($model_usuario->find()->all(), 'id_usuario', 'nombre_usuario')) ?>

            <?= $form->field($model, 'nombre_personal')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'apellidop_personal')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'apellidom_personal')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'cargo_personal')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'correo_personal')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'rut_personal')->textInput(['data-rut' => 'true'])?>

            <?= $form->field($model, 'tipo_reporte')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>        
    </div>
</div>


