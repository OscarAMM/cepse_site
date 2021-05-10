<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_legalframework extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'lf_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'legal_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ),
            'legal_content' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('lf_id', true);
        $this->dbforge->create_table('legalframework');
    }

    public function down()
    {
        $this->dbforge->drop_table('legalframework');
    }
}
