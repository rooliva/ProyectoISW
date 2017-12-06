<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id_usuario
 * @property integer $id_personal
 * @property string $nombre_usuario
 * @property string $password
 * @property string $tipo_usuario
 *
 * @property Personal $idPersonal
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_personal', 'nombre_usuario', 'password', 'tipo_usuario'], 'required'],
            [['id_personal'], 'integer'],
            [['nombre_usuario', 'password'], 'string', 'max' => 15],
            ['password', 'integer', 'message' => 'Solo se aceptan numeros enteros'],
            ['nombre_usuario', 'unique', 'message' => 'El nombre de usuario ingresado ya existe'],
             ['nombre_usuario', 'match', 'pattern' => "/^[0-9a-z]+$/", 'message' => 'Solo se aceptan letras minusculas y numeros enteros'],
            [['tipo_usuario'], 'string', 'max' => 30],
            [['id_personal'], 'exist', 'skipOnError' => true, 'targetClass' => Personal::className(), 'targetAttribute' => ['id_personal' => 'id_personal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'ID Usuario',
            'id_personal' => 'Personal',
            'nombre_usuario' => 'Nombre Usuario',
           // 'password' => 'Contraseña',
            'tipo_usuario' => 'Tipo Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersonal()
    {
        return $this->hasOne(Personal::className(), ['id_personal' => 'id_personal']);
    }
}
