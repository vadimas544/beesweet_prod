<?php

use yii\db\Migration;

/**
 * Class m190228_081919_create_table_order_items
 */
class m190228_081919_create_table_order_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_items', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'name' => $this->string(100),
            'price' => $this->string(100),
            'qty_item' => $this->integer(11),
            'sum_item' => $this->float()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order_items');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190228_081919_create_table_order_items cannot be reverted.\n";

        return false;
    }
    */
}
