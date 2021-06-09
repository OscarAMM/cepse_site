<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Migration_create_contact extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'contact_id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ),
            'content' => array(
                'type' => 'LONGTEXT',
                'null' => false,
            ),
            'time' => array(
                'type' => 'TIMESTAMP',
                'null' => false,
            ),
        ));
        $this->dbforge->add_key('contact_id', true);
        $this->dbforge->create_table('contacts');
    }
    public function down()
    {
        $this->dbforge->drop_table('contacts');
    }
}
