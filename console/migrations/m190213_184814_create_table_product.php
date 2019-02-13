<?php

use yii\db\Migration;

/**
 * Class m190213_184814_create_table_product
 */
class m190213_184814_create_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(100)->notNull(),
            'price' => $this->string(100),
            'img' => $this->string(255),
            'description' => $this->text(),
            'is_new' => $this->integer(1),
            'is_popular' => $this->integer(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190213_184814_create_table_product cannot be reverted.\n";

        return false;
    }
    */
}
