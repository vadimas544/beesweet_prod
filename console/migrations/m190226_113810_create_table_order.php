<?php

use yii\db\Migration;

/**
 * Class m190226_113810_create_table_order
 */
class m190226_113810_create_table_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item', [
            'id' => $this->primaryKey(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'qty' => $this->integer(10),
            'sum' => $this->float(),
            'status' => $this->integer(1)->defaultValue(0),
            'name' => $this->string(100),
            'email' => $this->string(255),
            'phone' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('item');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190226_113810_create_table_order cannot be reverted.\n";

        return false;
    }
    */
}
