<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_user_twits".
 *
 * @property integer $id
 * @property integer $id_user
 * @property string $twit_title
 * @property string $twit_comment
 * @property string $twit_created_at
 * @property string $twit_published_at
 * @property string $twit_updated_at
 * @property integer $twit_is_show
 * @property integer $twit_type_alert
 *
 * @property User $idUser
 */
class UserTwits extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_twits}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'twit_title', 'twit_comment', 'twit_created_at'], 'required'],
            [['id_user', 'twit_created_at', 'twit_published_at', 'twit_updated_at', 'twit_is_show', 'twit_type_alert'], 'integer'],
            [['twit_title'], 'string', 'max' => 32],
            [['twit_comment'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'twit_title' => 'Twit Title',
            'twit_comment' => 'Twit Comment',
            'twit_created_at' => 'Twit Created At',
            'twit_published_at' => 'Twit Published At',
            'twit_updated_at' => 'Twit Updated At',
            'twit_is_show' => 'Twit Is Show',
            'twit_type_alert' => 'Twit Type Alert',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
