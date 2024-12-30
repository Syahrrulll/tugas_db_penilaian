<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property int $id
 * @property string|null $deskripsi
 *
 * @property Akreditasi[] $akreditasis
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['deskripsi'], 'string', 'max' => 145],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * Gets query for [[Akreditasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasis()
    {
        return $this->hasMany(Akreditasi::class, ['akreditasi_id' => 'id']);
    }
}
