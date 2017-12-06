<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Reporte;
/* @var $this yii\web\View */
/* @var $model app\models\Historial */

$this->title = $model->id_historial;

$this->params['breadcrumbs'][] = ['label' => 'Historiales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


  ?>
<div class="historial-view">




    <h1><?= Html::encode($this->title) ?></h1>



    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_historial], ['class' => 'btn btn-primary']) 


        ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_historial], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas seguro que quiere borrar este ítem?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <?= DetailView::widget([
        'model' => $model,
            'attributes' => [
            'id_historial',
            'id_reporte',
            'estado',
            'descripcion',
        ],
    ]) ?>
    



  
</div>
