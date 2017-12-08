<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Historial */

$this->title = 'Create Historial';
$this->params['breadcrumbs'][] = ['label' => 'Historials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historial-create">

    <?= $this->render('_form', [
        'model' => $model,
        'model_reporte' => $model_reporte,
    ]) ?>

</div>
