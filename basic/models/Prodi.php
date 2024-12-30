<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id_prodi
 * @property string|null $nama_prodi
 * @property string|null $jenjang
 * @property int $fakultas_id_fk
 *
 * @property Akreditasi[] $akreditasis
 * @property Fakultas $fakultasIdFk
 * @property Penilaian[] $penilaians
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prodi', 'fakultas_id_fk'], 'required'],
            [['id_prodi', 'fakultas_id_fk'], 'integer'],
            [['nama_prodi'], 'string', 'max' => 145],
            [['jenjang'], 'string', 'max' => 45],
            [['id_prodi'], 'unique'],
            [['fakultas_id_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Fakultas::class, 'targetAttribute' => ['fakultas_id_fk' => 'id_fk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'nama_prodi' => 'Nama Prodi',
            'jenjang' => 'Jenjang',
            'fakultas_id_fk' => 'Fakultas Id Fk',
        ];
    }

    /**
     * Gets query for [[Akreditasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasis()
    {
        return $this->hasMany(Akreditasi::class, ['prodi_id_prodi' => 'id_prodi']);
    }

    /**
     * Gets query for [[FakultasIdFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFakultasIdFk()
    {
        return $this->hasOne(Fakultas::class, ['id_fk' => 'fakultas_id_fk']);
    }

    /**
     * Gets query for [[Penilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaians()
    {
        return $this->hasMany(Penilaian::class, ['prodi_id_prodi' => 'id_prodi']);
    }
}
