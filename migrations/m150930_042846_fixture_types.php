<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_042846_fixture_types extends Migration
{
    public function up()
    {

        $this->batchInsert('position_types', ['name'], [['Manager'], ['Project Manager'], ['Receptionist']]);

    }

    public function down()
    {

        $this->delete('position_types');
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
