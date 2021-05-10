<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_social_comitte extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'sc_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'content' => array(
                                'type' => 'LONGTEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('sc_id', TRUE);
                $this->dbforge->create_table('social_comitte');
        }

        public function down()
        {
                $this->dbforge->drop_table('social_comitte');
        }
}