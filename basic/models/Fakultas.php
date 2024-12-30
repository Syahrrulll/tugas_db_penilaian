<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property int $id_fk
 * @property string|null $nama_fk
 * @property string|null $singkatan
 * @property int $perguruan_tinggi_id_pt
 *
 * @property PerguruanTinggi $perguruanTinggiIdPt
 * @property Prodi[] $prodis
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fk', 'perguruan_tinggi_id_pt'], 'required'],
            [['id_fk', 'perguruan_tinggi_id_pt'], 'integer'],
            [['nama_fk'], 'string', 'max' => 100],
            [['singkatan'], 'string', 'max' => 45],
            [['id_fk'], 'unique'],
            [['perguruan_tinggi_id_pt'], 'exist', 'skipOnError' => true, 'targetClass' => PerguruanTinggi::class, 'targetAttribute' => ['perguruan_tinggi_id_pt' => 'id_pt']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fk' => 'Id Fk',
            'nama_fk' => 'Nama Fk',
            'singkatan' => 'Singkatan',
            'perguruan_tinggi_id_pt' => 'Perguruan Tinggi Id Pt',
        ];
    }

    /**
     * Gets query for [[PerguruanTinggiIdPt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerguruanTinggiIdPt()
    {
        return $this->hasOne(PerguruanTinggi::class, ['id_pt' => 'perguruan_tinggi_id_pt']);
    }

    /**
     * Gets query for [[Prodis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdis()
    {
        return $this->hasMany(Prodi::class, ['fakultas_id_fk' => 'id_fk']);
    }
}
