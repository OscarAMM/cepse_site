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
            'title_one' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
            'content' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
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