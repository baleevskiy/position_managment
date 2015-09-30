<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_030833_accountabilities extends Migration
{
    public function up()
    {
        $this->createTable('accountabilities', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('accountabilities');

        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
