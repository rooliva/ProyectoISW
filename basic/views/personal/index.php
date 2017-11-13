<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personals';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header">
        <h4>Administrar Personal <div class="pull-right"><?= Html::a('Crear Personal', ['create'], ['class' => 'btn btn-success']) ?></div></h4>
    </div>
    <div class="card-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
     <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
                'options' => ['class' => 'table-responsive'],
        'tableOptions' =>['class' => 'table table-bordered table-hover table-striped'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_personal',
            'id_usuario',
            'nombre_personal',
            'apellidop_personal',
            'apellidom_personal',
            // 'cargo_personal',
            // 'correo_personal',
            // 'rut_personal',
            // 'tipo_reporte',

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

