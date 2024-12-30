<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akreditasi".
 *
 * @property int $prodi_id_prodi
 * @property int $lembaga_id_lembaga
 * @property int $akreditasi_id
 * @property string $id
 * @property string|null $tanggal_mulai
 * @property string|null $tanggal_akhir
 * @property string|null $no_sk
 * @property string|null $lembaga_akreditasi
 * @property string|null $akreditasicol
 * @property string|null $file
 *
 * @property Kategori $akreditasi
 * @property Lembaga $lembagaIdLembaga
 * @property Prodi $prodiIdProdi
 */
class Akreditasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akreditasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prodi_id_prodi', 'lembaga_id_lembaga', 'akreditasi_id', 'id'], 'required'],
            [['prodi_id_prodi', 'lembaga_id_lembaga', 'akreditasi_id'], 'integer'],
            [['tanggal_mulai', 'tanggal_akhir'], 'safe'],
            [['id', 'no_sk', 'lembaga_akreditasi', 'file'], 'string', 'max' => 45],
            [['akreditasicol'], 'string', 'max' => 145],
            [['prodi_id_prodi', 'lembaga_id_lembaga', 'id'], 'unique', 'targetAttribute' => ['prodi_id_prodi', 'lembaga_id_lembaga', 'id']],
            [['akreditasi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::class, 'targetAttribute' => ['akreditasi_id' => 'id']],
            [['lembaga_id_lembaga'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::class, 'targetAttribute' => ['lembaga_id_lembaga' => 'id_lembaga']],
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
            'lembaga_id_lembaga' => 'Lembaga Id Lembaga',
            'akreditasi_id' => 'Akreditasi ID',
            'id' => 'ID',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_akhir' => 'Tanggal Akhir',
            'no_sk' => 'No Sk',
            'lembaga_akreditasi' => 'Lembaga Akreditasi',
            'akreditasicol' => 'Akreditasicol',
            'file' => 'File',
        ];
    }

    /**
     * Gets query for [[Akreditasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasi()
    {
        return $this->hasOne(Kategori::class, ['id' => 'akreditasi_id']);
    }

    /**
     * Gets query for [[LembagaIdLembaga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLembagaIdLembaga()
    {
        return $this->hasOne(Lembaga::class, ['id_lembaga' => 'lembaga_id_lembaga']);
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
