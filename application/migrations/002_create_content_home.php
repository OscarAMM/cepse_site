<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_content_home extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'content_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'title_one' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
            'title_two' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
            'title_three' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
            'paragraph_one' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
            'paragraph_two' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
            'paragraph_three' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('content_id', true);
        $this->dbforge->create_table('home_content');
    }

    public function down()
    {
        $this->dbforge->drop_table('home_content');
    }
}
