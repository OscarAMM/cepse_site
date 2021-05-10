<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_file extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'file_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'file_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ),
            'file_path' => array(
                'type' => 'LONGTEXT',
                'null' => FASLE,
            ),
        ));
        $this->dbforge->add_key('file_id', true);
        $this->dbforge->create_table('file');
    }

    public function down()
    {
        $this->dbforge->drop_table('file');
    }
}
