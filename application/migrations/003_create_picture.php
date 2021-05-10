<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_picture extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'picture_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'picture_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ),
            'picture_path' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('picture_id', true);
        $this->dbforge->create_table('pictures');
    }

    public function down()
    {
        $this->dbforge->drop_table('pictures');
    }
}
