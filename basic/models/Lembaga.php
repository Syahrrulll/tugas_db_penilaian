<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lembaga".
 *
 * @property int $id_lembaga
 * @property string|null $nama_lembaga
 *
 * @property Akreditasi[] $akreditasis
 */
class Lembaga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lembaga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lembaga'], 'required'],
            [['id_lembaga'], 'integer'],
            [['nama_lembaga'], 'string', 'max' => 45],
            [['id_lembaga'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lembaga' => 'Id Lembaga',
            'nama_lembaga' => 'Nama Lembaga',
        ];
    }

    /**
     * Gets query for [[Akreditasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasis()
    {
        return $this->hasMany(Akreditasi::class, ['lembaga_id_lembaga' => 'id_lembaga']);
    }
}
