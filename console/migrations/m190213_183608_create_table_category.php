<?php

use yii\db\Migration;

/**
 * Class m190213_183608_create_table_category
 */
class m190213_183608_create_table_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->defaultValue(0),
            'name' => $this->string(100)->notNull(),
            'keywords' => $this->string(255)->notNull(),
            'description' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190213_183608_create_table_category cannot be reverted.\n";

        return false;
    }
    */
}
