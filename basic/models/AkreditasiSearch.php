<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Akreditasi;

/**
 * AkreditasiSearch represents the model behind the search form of `app\models\Akreditasi`.
 */
class AkreditasiSearch extends Akreditasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prodi_id_prodi', 'lembaga_id_lembaga', 'akreditasi_id'], 'integer'],
            [['id', 'tanggal_mulai', 'tanggal_akhir', 'no_sk', 'lembaga_akreditasi', 'akreditasicol', 'file'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Akreditasi::find();

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
            'prodi_id_prodi' => $this->prodi_id_prodi,
            'lembaga_id_lembaga' => $this->lembaga_id_lembaga,
            'akreditasi_id' => $this->akreditasi_id,
            'tanggal_mulai' => $this->tanggal_mulai,
            'tanggal_akhir' => $this->tanggal_akhir,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'no_sk', $this->no_sk])
            ->andFilterWhere(['like', 'lembaga_akreditasi', $this->lembaga_akreditasi])
            ->andFilterWhere(['like', 'akreditasicol', $this->akreditasicol])
            ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }
}
