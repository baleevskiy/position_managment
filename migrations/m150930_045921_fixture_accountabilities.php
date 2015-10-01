<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_045921_fixture_accountabilities extends Migration
{
    public function up()
    {

        $this->batchInsert('accountabilities', ['name', 'description'],
            [
                ["work together", "Work together with the Product Owner to plan and execute projects, ensure you have the
appropriate product and technical specifications, and directions to deliver the product effectively
by establishing realistic estimates for timelines while ensuring that projects remain on target to
meet deadlines and without errors"],

                ["Collaborate to define product vision", "Collaborate with team in defining the Product Vision"],
                ["Demonstrate leadership", "Demonstrate leadership abilities to our clients, with the deployment of software, enhancements
and fixes"],

                ["Provide development plan", "Provide a software development plan that meets the future needs for OnePoint and Client ".
                    "products based on the state of the art technologies"],
                ["Evolve software", "Evolve the existing software system applications and architecture in various areas as needed"],
                ["Coordinate release and sprint planning", "Coordinate release and sprint planning"],
                ["Conduct scrum meetings", "Conduct scrum meetings"],
                ["resolve tech problems", "Help resolve technical problems with team"],
                ["Monitor team perfomance", "Monitor individual team member’s performance, development progress, and capabilities"],
                ["Provide reports (team, issues, etc.)", "Provide reports to the Managing Director regarding any potential issues with a team member ".
                "including their capabilities, development progress and performance"],
                ["Be a leader, coach, motivate the team", "Provide leadership and guidance to coach, motivate and lead team member to their optimum ".
                "performance levels and career development"],

            ]);

    }

    public function down()
    {

        $this->delete('accountabilities');
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
