<?php

use yii\db\Migration;

/**
 * Class m190226_113820_create_table_order_items
 */
class m190226_113820_create_table_order_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_item', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'name' => $this->string(100),
            'price' => $this->float(),
            'qty_item' => $this->integer(),
            'sum_item' => $this->float()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190226_113820_create_table_order_items cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190226_113820_create_table_order_items cannot be reverted.\n";

        return false;
    }
    */
}
