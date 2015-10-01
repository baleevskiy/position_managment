<?php

use yii\db\Schema;
use yii\db\Migration;

class m151001_002526_positions_add_column_name extends Migration
{
    public function up()
    {
        $this->addColumn('positions', 'name', $this->string(128)->defaultValue(''));
    }

    public function down()
    {
        $this->dropColumn('positions', 'name');
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
