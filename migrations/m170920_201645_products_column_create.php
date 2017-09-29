<?php

use yii\db\Migration;

class m170920_201645_products_column_create extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'products',
            [
                'id' => $this->primaryKey(),
                'product_name' => $this->string('30')->notNull(),
                'product_descr' => $this->text()->notNull(),
                'product_img' => $this->string('32')->notNull(),
                'product_created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
                'product_updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170920_201645_products_column_create cannot be reverted.\n";

        return false;
    }
    */
}
