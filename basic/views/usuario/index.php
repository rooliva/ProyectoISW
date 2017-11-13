<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios Registrados';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-header">
        <h4>Administrar Usuarios <div class="pull-right"><?= Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-success']) ?></div></h4>        
    </div>
    <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_usuario',
            'nombre_usuario',
            'password',

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
