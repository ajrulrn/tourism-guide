<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_destination_timelines extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'auto_increment' => TRUE,
                'unsigned' => TRUE 
            ),
            'destination_id' => array(
                'type' => 'BIGINT',
                'null' => FALSE
            ),
            'day' => array(
                'type' => 'INT',
                'null' => FALSE
            ),
            'time' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => FALSE
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE 
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('destination_timelines');
    }

    public function down()
    {
        $this->dbforge->drop_table('destination_timelines');
    }

}