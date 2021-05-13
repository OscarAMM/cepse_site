<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_user extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '191',
                'null' => false,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '191',
                'null' => false,
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '191',
                'null' => false,
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ),
            'range' => array(
                'type' => 'VARCHAR',
                'constraint' => '5',
            ),
        ));
        $this->dbforge->add_key('user_id', true);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
