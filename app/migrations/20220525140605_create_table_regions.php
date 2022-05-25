<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_regions extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'code' => array(
                'type' => 'VARCHAR',
                'constraint' => '13',
                'null' => FALSE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE
            )
        ));
        $this->dbforge->add_key('code', TRUE);
        $this->dbforge->create_table('regions');
    }

    public function down()
    {
        $this->dbforge->drop_table('regions');
    }

}