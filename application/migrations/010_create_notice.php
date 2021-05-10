<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_notice extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'notice_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'notice_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ),
            'notice_content' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('notice_id', true);
        $this->dbforge->create_table('notice');
    }

    public function down()
    {
        $this->dbforge->drop_table('notice');
    }
}
