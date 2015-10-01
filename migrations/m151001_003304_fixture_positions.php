<?php

use yii\db\Schema;
use yii\db\Migration;

class m151001_003304_fixture_positions extends Migration
{
    public function up()
    {
        $this->batchInsert('positions', ['name', 'type_id', 'description'],
            [
                ['General Manager', 1, 'this is just a test description for GENERAL MANAGER'],
                ['Lead Manager', 2, 'this is just a test description for Lead Manager'],
                ['Senior Developer', 3, 'this is just a test description for Senior Developer'],
                ['Middle Developer', 1, 'this is just a test description for Middle Developer'],
                ['Junior Developer', 2, 'this is just a test description for Junior Developer'],
                ['Network Developer', 2, 'this is just a test description for Network Developer'],
                ['System Administrator', 1, 'this is just a test description for System Administrator'],
                ['Web Designer', 3, 'this is just a test description for Web Designer'],
                ['Accountant', 1, 'this is just a test description for Accountant'],
                ['PR Manager', 2, 'this is just a test description for PR Manager'],
                ['Courier', 3, 'this is just a test description for Courier'],
                ['Cleaner', 1, 'this is just a test description for Cleaner'],

            ]);
    }

    public function down()
    {
        $this->delete('positions');
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
