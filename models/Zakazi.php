<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zakazi".
 *
 * @property int $id
 * @property int $user_id
 * @property int $game_id
 */
class Zakazi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakazi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'game_id'], 'required'],
            [['id', 'user_id', 'game_id'], 'integer'],
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
            'user_id' => 'User ID',
            'game_id' => 'Game ID',
        ];
    }
}
