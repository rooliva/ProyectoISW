<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Personal;

/**
 * PersonalSearch represents the model behind the search form about `app\models\Personal`.
 */
class PersonalSearch extends Personal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_personal', 'id_usuario'], 'integer'],
            [['nombre_personal', 'apellidop_personal', 'apellidom_personal', 'cargo_personal', 'correo_personal', 'rut_personal', 'tipo_reporte'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Personal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_personal' => $this->id_personal,
            'id_usuario' => $this->id_usuario,
        ]);

        $query->andFilterWhere(['like', 'nombre_personal', $this->nombre_personal])
            ->andFilterWhere(['like', 'apellidop_personal', $this->apellidop_personal])
            ->andFilterWhere(['like', 'apellidom_personal', $this->apellidom_personal])
            ->andFilterWhere(['like', 'cargo_personal', $this->cargo_personal])
            ->andFilterWhere(['like', 'correo_personal', $this->correo_personal])
            ->andFilterWhere(['like', 'rut_personal', $this->rut_personal])
            ->andFilterWhere(['like', 'tipo_reporte', $this->tipo_reporte]);

        return $dataProvider;
    }
}
