<?php

use yii\db\Migration;

class m170914_162902_users extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            "users",
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(20)->notNull(),
                'email' => $this->string(50)->notNull(),
                'age' => $this->integer()
            ]
        );


        $this->insert(
            'users',
            [
                'name' => 'admin',
                'email' => 'admin@market.loc'
            ]
        );

    }

    public function safeDown()
    {
        $this->dropTable('users');
    }

}
