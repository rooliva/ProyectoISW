<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reportes';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header">
         <h4>Administrar Reportes <div class="pull-right"><?= Html::a('Crear Reporte', ['create'], ['class' => 'btn btn-success']) ?></div></h4>       
    </div>
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_reporte',
            'nombre_reporte',
            'fecha_reporte',
            'grupo',
            'tipo_reporte',
            // 'categoria',
            // 'recurso_servicio',
            // 'ubicacion',

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

