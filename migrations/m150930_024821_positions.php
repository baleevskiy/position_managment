<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_024821_positions extends Migration
{
    public function up()
    {
        $this->createTable('position_types', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)
        ]);
        $this->createTable('positions',[
            'id' => $this->primaryKey(),
            'description' => $this->text(),
            'type_id' => $this->integer(11)->notNull()
        ]);

        $this->addForeignKey('type_fk', 'positions', 'type_id', 'position_types', 'id');

    }

    public function down()
    {
        $this->dropTable('positions');
        $this->dropTable('position_types');

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
