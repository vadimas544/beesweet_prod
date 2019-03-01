<?php

namespace frontend\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string $name
 * @property string $price
 * @property int $qty_item
 * @property double $sum_item
 */
class OrderItems extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_items';
    }


    public static function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'qty_item'], 'integer'],
            [['sum_item'], 'number'],
            [['name', 'price'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    /*
    Attribute labels need if we want to create a form 
    */
}
