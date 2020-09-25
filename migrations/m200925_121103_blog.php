<?php

use yii\db\Migration;

/**
 * Class m200925_121103_blog
 */
class m200925_121103_blog extends Migration
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
        echo "m200925_121103_blog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200925_121103_blog cannot be reverted.\n";

        return false;
    }
    */
}
