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
            [['judul_ads', 'photo', 'posisi', 'status'], 'required'],
            [['photo'], 'file', 'extensions' => 'jpg, png, gif'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul_ads', 'photo', 'posisi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'judul_ads' => 'Judul Ads',
            'photo' => 'Photo',
            'posisi' => 'Posisi',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }

    public function scenarios() {
        $skenario = parent::scenarios();
        $skenario['update'] = ['updated_at', 'status'];
        return $skenario;
    }

    public function beforeSave($insert) {
        if($this->isNewRecord)
            $this->created_at = date('Y-m-d H:i:s');

        return true;
    }

    public function upload() {
        $img = strtolower($this->photo->name);
        $img = str_replace([' ', '+', '-', '=', '(', ')'], '-', $img);
        $this->photo->saveAs(\Yii::getAlias('@webroot') . \Yii::$app->params['pathAds'] . $img);
        $this->photo = $img;
        return true;
    }
}
