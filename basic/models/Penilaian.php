<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penilaian".
 *
 * @property int $prodi_id_prodi
 * @property int $indikator_id_indikator
 * @property string $tahun
 * @property float|null $nilai
 *
 * @property Indikator $indikatorIdIndikator
 * @property Prodi $prodiIdProdi
 */
class Penilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'number'],
            [['prodi_id_prodi', 'indikator_id_indikator', 'tahun'], 'required'],
            [['prodi_id_prodi', 'indikator_id_indikator'], 'integer'],
            [['nilai'], 'number'],
            [['tahun'], 'year', 'max' => 5],
            [['prodi_id_prodi', 'indikator_id_indikator', 'tahun'], 'unique', 'targetAttribute' => ['prodi_id_prodi', 'indikator_id_indikator', 'tahun']],
            [['indikator_id_indikator'], 'exist', 'skipOnError' => true, 'targetClass' => Indikator::class, 'targetAttribute' => ['indikator_id_indikator' => 'id_indikator']],
            [['prodi_id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::class, 'targetAttribute' => ['prodi_id_prodi' => 'id_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prodi_id_prodi' => 'Prodi Id Prodi',
            'indikator_id_indikator' => 'Indikator Id Indikator',
            'tahun' => 'Tahun',
            'nilai' => 'Nilai',
        ];
    }

    /**
     * Gets query for [[IndikatorIdIndikator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndikatorIdIndikator()
    {
        return $this->hasOne(Indikator::class, ['id_indikator' => 'indikator_id_indikator']);
    }

    /**
     * Gets query for [[ProdiIdProdi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdiIdProdi()
    {
        return $this->hasOne(Prodi::class, ['id_prodi' => 'prodi_id_prodi']);
    }
}
