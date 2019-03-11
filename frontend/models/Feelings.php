<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "feelings".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $img
 */
class Feelings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feelings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'img' => 'Img',
        ];
    }
}
