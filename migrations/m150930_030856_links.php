<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_030856_links extends Migration
{
    public function up()
    {
        $this->createTable('position_type__accountabilities', [
            'position_type_id' => $this->integer()->notNull(),
            'accountability_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('postype_junction',
            'position_type__accountabilities', 'position_type_id',
            'position_types', 'id', 'CASCADE'
            );

        $this->addForeignKey('accountability_junction',
            'position_type__accountabilities', 'accountability_id',
            'accountabilities', 'id', 'CASCADE'
        );


    }

    public function down()
    {
        $this->dropTable('position_type__accountabilities');

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
