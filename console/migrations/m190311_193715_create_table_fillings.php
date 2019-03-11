<?php

use yii\db\Migration;

/**
 * Class m190311_193715_create_table_fillings
 */
class m190311_193715_create_table_fillings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feelings', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'description' => $this->text(),
            'img' =>$this->string(255),
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('feelings');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190311_193715_create_table_fillings cannot be reverted.\n";

        return false;
    }
    */
}
