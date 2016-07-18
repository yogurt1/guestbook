<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $user
 * @property string $email
 * @property string $body
 * @property string $file
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'email', 'body'], 'required'],
            [['body', 'file'], 'string'],
            [['user', 'email'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'email' => 'Email',
            'body' => 'Body',
            'file' => 'File',
        ];
    }
}
