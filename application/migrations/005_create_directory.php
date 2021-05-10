<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_directory extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'directory_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'employee_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'employee_charge' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE,
                        ),
                        'employee_email' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '255',
                            'null' => FALSE
                        ),
                        'employee_phone' =>array(
                            'type' => 'VARCHAR',
                            'constraint' => '255',
                            'null' => TRUE
                        )
                ));
                $this->dbforge->add_key('directory_id', TRUE);
                $this->dbforge->create_table('directory');
        }

        public function down()
        {
                $this->dbforge->drop_table('directory');
        }
}