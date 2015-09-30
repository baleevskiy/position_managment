<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_030850_employee extends Migration
{
    public function up()
    {
        $this->createTable('employees', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(128)->notNull(),
            'last_name' => $this->string(128)->notNull(),
            'position_type_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey('position_fk', 'employees', 'position_type_id', 'position_types', 'id');
    }

    public function down()
    {
        $this->dropTable('employees');

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
