<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\Configurable;
use yii\base\ViewContextInterface;

/* @var $this yii\web\View */
/* @var $model app\models\Reporte     https://www.youtube.com/watch?v=NZDpTHtRp1s */
/* @var $form yii\widgets\ActiveForm  <?= $form->field($model, 'id_reporte')->textInput() ?>   */
?>

<div class="reporte-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'nombre_reporte')->textInput(['maxlength' => true]) ?>

    

   

    <?php echo $form->field($model,'fecha_reporte')->
    widget(\yii\jui\DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-115:+0',
            'changeYear' => true]
    ]) ?>

    

    <?php echo $form->field($model, 'grupo')->dropDownList(['prompt'=>'Seleccionar', 'Soporte y Sist.' => 'Soporte y Sistema', 'Gestión' => 'Gestión', 'Proyecto' => 'Proyecto']); ?>

    <?php echo $form->field($model, 'tipo_reporte')->dropDownList(['prompt'=>'Seleccionar', 'Hardware' => 'Hardware', 'Software' => 'Software', 'Usuario' => 'Usuario','Redes' => 'Redes','Compras' => 'Compras','Reuniones' => 'Reuniones','Coordinacion' => 'Coordinacion','Uso Tic' => 'Uso Tic','Inventario' => 'Inventario','Sistema Gestión' => 'Sistema Gestión','Tablet' => 'Tablet','Libro Digital' => 'Libro Digital','Renovacion Equipamiento' => 'Renovacion Equipamiento','Mantencion Reparacion' => 'Mantencion Reparacion']); ?>

    

    <?php echo $form->field($model, 'categoria')->dropDownList(['prompt'=>'Seleccionar', 'Computadores' => 'Computadores', 'Impresoras' => 'Impresoras', 'Proyector' => 'Proyector', 'Audio' => 'Audio', 'Pizarra Interactiva' => 'Pizarra Interactiva', 'Telefonos' => 'Telefonos', 'Servidores' => 'Servidores', 'Cámaras' => 'Cámaras', 'Otros' => 'Otros', 'Antivirus' => 'Antivirus', 'Cámara' => 'Cámara', 'Chrome' => 'Chrome', 'Edufacil' => 'Edufacil', 'G3' => 'G3', 'Google Apps' => 'Google Apps', 'Igivetest' => 'Igivetest', 'Office' => 'Office', 'Ofimática' => 'Ofimática']); ?>

    
    <?php echo $form->field($model, 'recurso_servicio')->dropDownList(['prompt'=>'Select...', 'Aspectos básicos' => 'Aspectos básicos', 'Cables' => 'Cables', 'Cambio de Equipo' => 'Cambio de Equipo', 'Configuración' => 'Configuración', 'Instalación' => 'Instalación', 'Limpieza Física' => 'Limpieza Física', 'Perifericos' => 'Perifericos', 'Revisión' => 'Revisión', 'Instalación de Tintas' => 'Instalación de Tintas', 'Mantenimiento' => 'Mantenimiento', 'Atasco de Papel' => 'Atasco de Papel', 'Configuración' => 'Configuración', 'Error Almohadilla' => 'Error Almohadilla', 'Error de Tinta' => 'Error de Tinta', 'Instalación física' => 'Instalación física', 'Instalación de Software' => 'Instalación de Software', 'Problemas de conexión' => 'Problemas de conexión', 'Reinicio de niveles' => 'Reinicio de niveles', 'Cambio de Ubicación' => 'Cambio de Ubicación', 'Conexión Cables' => 'Conexión Cables', 'Control remoto' => 'Control remoto', 'Instalación física' => 'Instalación física', 'Instalación soporte' => 'Instalación soporte', 'Mantenimiento' => 'Mantenimiento']); ?>

    
    <?php echo $form->field($model, 'ubicacion')->dropDownList(['prompt'=>'Seleccionar', 'Sala Servidores' => 'Sala Servidores', 'Laboratorio de Ciencias' => 'Laboratorio de Ciencias', 'Recepción' => 'Recepción', 'Biblioteca' => 'Biblioteca', 'Subdirección '=> 'Subdirección Académica','Sala Profesores'=>'Sala Profesores', 'Impección General'=>'Impección General', 'Oficina Director'=>'Oficina Director']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
