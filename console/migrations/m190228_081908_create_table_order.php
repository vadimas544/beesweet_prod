<?php

use yii\db\Migration;

/**
 * Class m190228_081908_create_table_order
 */
class m190228_081908_create_table_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'qty' => $this->integer(),
            'sum' => $this->float(),
            'status' => $this->integer(1)->defaultValue(0),
            'name' => $this->string(100),
            'email' => $this->string(255),
            'phone' => $this->string(100)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190228_081908_create_table_order cannot be reverted.\n";

        return false;
    }
    */
}
