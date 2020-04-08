<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property int $id_ads
 * @property string $judul_ads
 * @property string $photo
 * @property string $posisi
 * @property string $create_by
 * @property string $update_by
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_ads', 'photo', 'posisi'], 'required'],
            [['create_by', 'update_by'], 'safe'],
            [['judul_ads', 'photo', 'posisi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ads' => 'Id Ads',
            'judul_ads' => 'Judul Ads',
            'photo' => 'Photo',
            'posisi' => 'Posisi',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
