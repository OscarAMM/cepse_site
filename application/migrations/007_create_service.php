<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_service extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'service_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'service_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ),
            'service_content' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
            'service_directed' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ),
            'service_requirements' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('service_id', true);
        $this->dbforge->create_table('service');
    }

    public function down()
    {
        $this->dbforge->drop_table('service');
    }
}
