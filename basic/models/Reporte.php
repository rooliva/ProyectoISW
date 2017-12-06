<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reporte".
 *
 * @property integer $id_reporte
 * @property string $nombre_reporte
 * @property string $fecha_reporte
 * @property string $grupo
 * @property string $tipo_reporte
 * @property string $categoria
 * @property string $recurso_servicio
 * @property string $ubicacion
 *
 * @property ACargo[] $aCargos
 * @property Personal[] $idPersonals
 * @property Historial[] $historials
 */
class Reporte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reporte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_reporte'], 'safe'],
            [['nombre_reporte', 'grupo', 'categoria', 'recurso_servicio', 'ubicacion'], 'string', 'max' => 15],
            [['tipo_reporte'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_reporte' => 'Id Reporte',
            'nombre_reporte' => 'Nombre Reporte',
            'fecha_reporte' => 'Fecha Reporte',
            'grupo' => 'Grupo',
            'tipo_reporte' => 'Tipo Reporte',
            'categoria' => 'Categoria',
            'recurso_servicio' => 'Recurso Servicio',
            'ubicacion' => 'Ubicacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getACargos()
    {
        return $this->hasMany(ACargo::className(), ['id_reporte' => 'id_reporte']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersonals()
    {
        return $this->hasMany(Personal::className(), ['id_personal' => 'id_personal'])->viaTable('a_cargo', ['id_reporte' => 'id_reporte']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorials()
    {
        return $this->hasMany(Historial::className(), ['id_reporte' => 'id_reporte']);
    }
}
