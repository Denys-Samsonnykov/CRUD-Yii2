<?php

use yii\db\Migration;

/**
 * Class m230430_091034_products
 */
class m230430_091034_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230430_091034_products cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('products', [
           'id' => $this->primaryKey(),
           'title' => $this->string()->notNull(),
            'category' => $this->string(),
           'description' => $this->text(),
           'quantity' => $this->integer(),
           'price' => $this->float()->notNull(),
           'madeIn' => $this->string()->notNull(),
            'SKU' => $this->integer()->unique(),
        ]);
    }

    public function down()
    {
        echo "m230430_091034_products cannot be reverted.\n";

        return false;
    }

}
