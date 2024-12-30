<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perguruan_tinggi".
 *
 * @property int $id_pt
 * @property string|null $nama_pt
 *
 * @property Fakultas[] $fakultas
 */
class PerguruanTinggi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perguruan_tinggi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pt'], 'required'],
            [['id_pt'], 'integer'],
            [['nama_pt'], 'string', 'max' => 100],
            [['id_pt'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pt' => 'Id Pt',
            'nama_pt' => 'Nama Pt',
        ];
    }

    /**
     * Gets query for [[Fakultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFakultas()
    {
        return $this->hasMany(Fakultas::class, ['perguruan_tinggi_id_pt' => 'id_pt']);
    }
}
