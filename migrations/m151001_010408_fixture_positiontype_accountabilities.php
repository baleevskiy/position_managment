<?php

use app\models\PositionType;
use yii\db\Schema;
use yii\db\Migration;

class m151001_010408_fixture_positiontype_accountabilities extends Migration
{
    public function up()
    {
        $lists = [
            0 => [1,2,3,6,7,8,9,10,11],
            1 => [1,2,3,4,5,6,7],
            2 => [2,4,6,8,10,11],
            3 => [6,4,3,2],
        ];
        $pos = 0;
        foreach(PositionType::find()->all() as $positionType){
            $positionType->accountability_list = $lists[++$pos % 4];
            $positionType->save();
        }
    }

    public function down()
    {
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
