<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_aboutus extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'about_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'objective_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ),
            'objective_text' => array(
                'type' => 'LONGTEXT',
                'null' => false,
            ),
            'mission_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ),
            'mission_text' => array(
                'type' => 'LONGTEXT',
                'null' => false,
            ),
            'vision_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ),
            'vision_text' => array(
                'type' => 'LONGTEXT',
                'null' => false,
            ),
        ));
        $this->dbforge->add_key('about_id', true);
        $this->dbforge->create_table('aboutus');
    }

    public function down()
    {
        $this->dbforge->drop_table('aboutus');
    }
}
