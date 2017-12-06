<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historial".
 *
 * @property integer $id_historial
 * @property integer $id_reporte
 * @property string $estado
 * @property string $descripcion
 *
 * @property Reporte $idReporte
 */
class Historial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'string', 'max' => 15],
            [['descripcion'], 'string', 'max' => 500],
            [['id_reporte'], 'exist', 'skipOnError' => true, 'targetClass' => Reporte::className(), 'targetAttribute' => ['id_reporte' => 'id_reporte']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_historial' => 'Id Historial',
            'id_reporte' => 'Reporte',
            'estado' => 'Estado',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReporte()
    {
        return $this->hasOne(Reporte::className(), ['id_reporte' => 'id_reporte']);
    }

  
}
