<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_045058_add_field_description__accountabilities extends Migration
{
    public function up()
    {
        $this->addColumn('accountabilities', 'description', $this->text()->notNull());
    }

    public function down()
    {
        $this->dropColumn('accountabilities', 'description');

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
