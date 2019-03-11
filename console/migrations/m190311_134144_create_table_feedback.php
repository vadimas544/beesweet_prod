<?php

use yii\db\Migration;

/**
 * Class m190311_134144_create_table_feedback
 */
class m190311_134144_create_table_feedback extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'subject' => $this->string(100),
            'message' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('feedback');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190311_134144_create_table_feedback cannot be reverted.\n";

        return false;
    }
    */
}
