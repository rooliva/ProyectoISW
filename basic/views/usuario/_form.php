<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_personal')->dropDownList(ArrayHelper::map($model_personal->find()->all(), 'id_personal', 'nombre_personal'),['prompt'=>'Seleccionar','required'=> true]); ?>

    <?= $form->field($model, 'nombre_usuario')->textInput(['maxlength' => true, 'required'=> true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'required'=> true]) ?>

    <?php echo $form->field($model, 'tipo_usuario') -> dropDownList(['prompt'=>'Seleccionar', 'SuperUsuario' => 'SuperUsuario', 'Usuario' => 'Usuario']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear usuario' : 'Actualizar usuario', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
