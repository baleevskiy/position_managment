<?php

use yii\db\Schema;
use yii\db\Migration;

class m151001_011532_fixture_employee extends Migration
{
    public function up()
    {
        $names = ['John', 'Cliff', 'Mary', 'Josh', 'Blake', 'Jacqueline', 'Steve', 'Ben', 'Murray'];
        $surnames = ['Dow', 'Gates', 'Jobs', 'Powel', 'Putin', 'Black', 'Brown', 'Ross', 'Mortimer', 'Griffiths'];
        for($c=0; $c<15; $c++) {
            $this->insert('employees', [
                'first_name' => $names[array_rand($names)],
                'last_name' => $surnames[array_rand($surnames)],
                'position_id' => rand(1,10),
            ]);
        }
    }

    public function down()
    {
        echo "m151001_011532_fixture_employee cannot be reverted.\n";

        return false;
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
