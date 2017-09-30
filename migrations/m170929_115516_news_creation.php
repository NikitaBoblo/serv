<?php

use yii\db\Migration;

class m170929_115516_news_creation extends Migration
{
    public function safeUp()
    {
        $lipsum = new \joshtronic\LoremIpsum();
        $rando = random_int(25, 50);
        for ($i = 0; $i < $rando; $i++){
            $this->insert('news', [
                'news_name' => ucfirst($lipsum->words(random_int(1, 4))),
//                'news_text' => $lipsum->sentences(50)
                'news_text' => '<p>' . $lipsum->sentences(random_int(5, 15)) . '</p>' .
                    '<p>' . $lipsum->sentences(random_int(3, 10)) . '</p>' .
                    '<p>' . $lipsum->sentences(random_int(10, 20)) . '</p>' .
                    '<p>' . $lipsum->sentences(random_int(10, 15)) . '</p>'
            ]);
        }

    }

    public function safeDown()
    {
        $this->truncateTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170929_115516_news_creation cannot be reverted.\n";

        return false;
    }
    */
}
