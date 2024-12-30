<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indikator".
 *
 * @property int $id_indikator
 * @property string|null $nama_indikator
 * @property int|null $no_urut
 * @property int|null $aktif
 * @property int $elemen_id_elemen
 *
 * @property Elemen $elemenIdElemen
 * @property Penilaian[] $penilaians
 */
class Indikator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indikator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_indikator', 'elemen_id_elemen'], 'required'],
            [['id_indikator', 'no_urut', 'aktif', 'elemen_id_elemen'], 'integer'],
            [['nama_indikator'], 'string'],
            [['id_indikator'], 'unique'],
            [['elemen_id_elemen'], 'exist', 'skipOnError' => true, 'targetClass' => Elemen::class, 'targetAttribute' => ['elemen_id_elemen' => 'id_elemen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_indikator' => 'Id Indikator',
            'nama_indikator' => 'Nama Indikator',
            'no_urut' => 'No Urut',
            'aktif' => 'Aktif',
            'elemen_id_elemen' => 'Elemen Id Elemen',
        ];
    }

    /**
     * Gets query for [[ElemenIdElemen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getElemenIdElemen()
    {
        return $this->hasOne(Elemen::class, ['id_elemen' => 'elemen_id_elemen']);
    }

    /**
     * Gets query for [[Penilaians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaians()
    {
        return $this->hasMany(Penilaian::class, ['indikator_id_indikator' => 'id_indikator']);
    }
}
