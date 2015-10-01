<?php

use yii\db\Schema;
use yii\db\Migration;

class m151001_004343_position_drop_position_type_id__add_position_id_fk extends Migration
{
    public function up()
    {
        $this->dropForeignKey('position_fk', 'employees');
        $this->dropColumn('employees', 'position_type_id');
        $this->addColumn('employees', 'position_id', $this->integer()->notNull());
        $this->update('employees',['position_id' => 2], []);
        $this->addForeignKey('position_fk', 'employees', 'position_id', 'positions', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('position_fk', 'employees');
        $this->dropColumn('employees', 'position_id');
        $this->addColumn('employees', 'position_type_id', $this->integer()->notNull());
        $this->update('employees',['position_type_id' => 2], []);
        $this->addForeignKey('position_fk', 'employees', 'position_type_id', 'position_types', 'id');
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
