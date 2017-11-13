<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id_personal
 * @property integer $id_usuario
 * @property string $nombre_personal
 * @property string $apellidop_personal
 * @property string $apellidom_personal
 * @property string $cargo_personal
 * @property string $correo_personal
 * @property string $rut_personal
 * @property string $tipo_reporte
 *
 * @property ACargo[] $aCargos
 * @property Reporte[] $idReportes
 * @property Usuario $idUsuario
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
            [['id_personal', 'id_usuario'], 'required'],
            [['id_personal', 'id_usuario'], 'integer'],
            [['nombre_personal', 'apellidop_personal', 'apellidom_personal', 'cargo_personal'], 'string', 'max' => 15],
            [['correo_personal'], 'string', 'max' => 50],
            [['correo_personal'], 'email'],
            [['rut_personal'], 'string', 'max' => 11],
            [['rut_personal'], \sateler\rut\RutValidator::className()],
            [['tipo_reporte'], 'string', 'max' => 10],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'id_usuario' => 'Usuario',
            'nombre_personal' => 'Nombre Personal',
            'apellidop_personal' => 'Apellido Paterno',
            'apellidom_personal' => 'Apellido Materno',
            'cargo_personal' => 'Cargo Personal',
            'correo_personal' => 'Correo Personal',
            'rut_personal' => 'Rut Personal',
            'tipo_reporte' => 'Tipo Reporte',
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
    public function getIdUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id_usuario' => 'id_usuario']);
    }
}
