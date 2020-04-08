<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property int $id_kota
 * @property string $username
 * @property string $password
 * @property int $level
 * @property string $create_by
 * @property string $update_by
 */
class Userin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kota', 'username', 'password', 'level'], 'required'],
            [['id_kota', 'level'], 'integer'],
            [['create_by', 'update_by'], 'safe'],
            [['username', 'password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'id_kota' => 'Id Kota',
            'username' => 'Username',
            'password' => 'Password',
            'level' => 'Level',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
