<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id_personal
 * @property string $nombre_personal
 * @property string $apellidop_personal
 * @property string $apellidom_personal
 * @property string $cargo_personal
 * @property string $correo_personal
 * @property string $rut_personal
 * @property string $tipo_personal
 *
 * @property ACargo[] $aCargos
 * @property Reporte[] $idReportes
 * @property Usuario[] $usuarios
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_personal', 'apellidop_personal', 'apellidom_personal', 'cargo_personal', 'correo_personal', 'rut_personal', 'tipo_personal'], 'required'],
            [['nombre_personal', 'apellidop_personal', 'apellidom_personal', 'cargo_personal'], 'string', 'max' => 15],
            [['correo_personal'], 'string', 'max' => 50],
            [['rut_personal'], 'string', 'max' => 11],
            [['tipo_personal'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nombre_personal' => 'Nombre Personal',
            'apellidop_personal' => 'Apellidop Personal',
            'apellidom_personal' => 'Apellidom Personal',
            'cargo_personal' => 'Cargo Personal',
            'correo_personal' => 'Correo Personal',
            'rut_personal' => 'Rut Personal',
            'tipo_personal' => 'Tipo Personal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getACargos()
    {
        return $this->hasMany(ACargo::className(), ['id_personal' => 'id_personal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdReportes()
    {
        return $this->hasMany(Reporte::className(), ['id_reporte' => 'id_reporte'])->viaTable('a_cargo', ['id_personal' => 'id_personal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id_personal' => 'id_personal']);
    }
}
