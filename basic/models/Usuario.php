<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id_usuario
 * @property string $nombre_usuario
 * @property string $password
 *
 * @property Personal[] $personals
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
            [['nombre_usuario', 'password'], 'required'],
            ['nombre_usuario', 'unique', 'message' => 'El nombre de usuario ingresado ya existe'],
            ['nombre_usuario', 'match', 'pattern' => "/^[0-9a-z]+$/", 'message' => 'Solo se aceptan letras minusculas y numeros enteros'],
            ['password', 'integer', 'message' => 'Solo se aceptan numeros enteros'],

        ];
    }

    /**
     * @inheritdoc
     */

     /* NOMBRE DE LOS LABELS EN LA VISTA PRINCIPAL*/
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'ID USUARIO',
            'nombre_usuario' => 'NOMBRE USUARIO',
            'password' => 'CONTRASEÑA USUARIO',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonals()
    {
        return $this->hasMany(Personal::className(), ['id_usuario' => 'id_usuario']);
    }
}
