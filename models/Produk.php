<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $detail
 * @property int $harga
 * @property string $create_by
 * @property string $update_by
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'detail', 'harga'], 'required'],
            [['detail', 'harga'], 'integer'],
            [['create_by', 'update_by'], 'safe'],
            [['nama_produk'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'nama_produk' => 'Nama Produk',
            'detail' => 'Detail',
            'harga' => 'Harga',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
