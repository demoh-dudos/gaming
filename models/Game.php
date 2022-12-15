<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game".
 *
 * @property int $game_id
 * @property string $name
 * @property string $description
 * @property float $price
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price'], 'required'],
            [['game_id'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 250],
            [['game_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'game_id' => 'Game ID',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
        ];
    }
}
