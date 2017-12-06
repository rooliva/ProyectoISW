<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reporte;

/**
 * ReporteSearch represents the model behind the search form about `app\models\Reporte`.
 */
class ReporteSearch extends Reporte
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_reporte'], 'integer'],
            [['nombre_reporte', 'fecha_reporte', 'grupo', 'tipo_reporte', 'categoria', 'recurso_servicio', 'ubicacion'], 'safe'],
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
        $query = Reporte::find();

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
            'id_reporte' => $this->id_reporte,
            'fecha_reporte' => $this->fecha_reporte,
        ]);

        $query->andFilterWhere(['like', 'nombre_reporte', $this->nombre_reporte])
            ->andFilterWhere(['like', 'grupo', $this->grupo])
            ->andFilterWhere(['like', 'tipo_reporte', $this->tipo_reporte])
            ->andFilterWhere(['like', 'categoria', $this->categoria])
            ->andFilterWhere(['like', 'recurso_servicio', $this->recurso_servicio])
            ->andFilterWhere(['like', 'ubicacion', $this->ubicacion]);

        return $dataProvider;
    }
}
