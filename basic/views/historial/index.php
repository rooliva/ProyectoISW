<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HistorialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Historials';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header">
         <h4>Administrar Historiales <div class="pull-right"><?= Html::a('Crear Historial', ['create'], ['class' => 'btn btn-success']) ?></div></h4>       
    </div>
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_historial',
            'id_reporte',
            'estado',
            'descripcion',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view} {update} {delete}',
             'buttons' => [
                'view' => function($url)
                          {
                              return Html::a('<span class="fa fa-eye"></span>', $url);
                          },
                'update' => function($url)
                          {
                              return Html::a('<span class="fa fa-pencil"></span>', $url);
                          },
                'delete' => function($url)
                          {
                              return Html::a('<span class="fa fa-trash-o"></span>', $url,['data-method'=>'post']);
                          }                                                    
             ]
            ],
        ],
    ]); ?>        
    </div>
</div>

