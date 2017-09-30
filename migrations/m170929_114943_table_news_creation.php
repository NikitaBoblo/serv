<?php

use yii\db\Migration;

class m170929_114943_table_news_creation extends Migration
{
    public function safeUp()
    {
        $this->createTable('news', [
            'news_id' => $this->primaryKey(),
            'news_name' => $this->string(50),
            'news_text' => $this->text(),
            'news_create_data' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170929_114943_table_news_creation cannot be reverted.\n";

        return false;
    }
    */
}
