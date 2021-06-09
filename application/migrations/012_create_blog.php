<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Migration_create_blog extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'blog_id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'blog_title' => array(
                'type' => 'VARCHAR',
                'constraint' => 400,
                'null' => false,
            ),
            'blog_content' => array(
                'type' => 'LONGTEXT',
                'null' => false,
            ),
            'published_by' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ),
            'time' => array(
                'type' => 'TIMESTAMP',
                'null' => false,
            ),
        ));
        $this->dbforge->add_key('blog_id', true);
        $this->dbforge->create_table('blogs');
    }
    public function down()
    {
        $this->dbforge->drop_table('blogs');
    }
}
