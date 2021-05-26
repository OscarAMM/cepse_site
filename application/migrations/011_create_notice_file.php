<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_notice_file extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'notice_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => false,
            ),
            'file_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => false,
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('p_notice_file');

    }

    public function down()
    {
        $this->dbforge->drop_table('p_notice_file');
    }
}
