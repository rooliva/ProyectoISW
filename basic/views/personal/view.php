<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */

$this->title = $model->id_personal;
$this->params['breadcrumbs'][] = ['label' => 'Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header">
        <h4>Ver Personal <?= Html::encode($this->title) ?></h4>
    </div>
    <div class="card-body">
     <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id_personal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_personal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Está seguro que quiere eliminar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_personal',
            'id_usuario',
            'nombre_personal',
            'apellidop_personal',
            'apellidom_personal',
            'cargo_personal',
            'correo_personal',
            'rut_personal',
            'tipo_reporte',
        ],
    ]) ?>       
    </div>
</div>

