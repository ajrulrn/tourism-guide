<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_levels extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE,
                'unsigned' => TRUE 
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('levels');
    }

    public function down()
    {
        $this->dbforge->drop_table('levels');
    }

}