<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reporte */

$this->title = 'Actualizar Reporte: ' . $model->id_reporte;
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reporte, 'url' => ['view', 'id' => $model->id_reporte]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="reporte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
