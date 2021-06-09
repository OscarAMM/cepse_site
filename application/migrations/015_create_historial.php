<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Migrate_create_historial extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'historial_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ),
        ));
    }
    public function down()
    {

    }
}
