<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_ratings extends CI_Migration {

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
            'user_id' => array(
                'type' => 'BIGINT',
                'null' => FALSE
            ),
            'rate' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'null' => FALSE
            ),
            'feedback' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => FALSE
            ),
            'inserted_at datetime default current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('ratings');
    }

    public function down()
    {
        $this->dbforge->drop_table('ratings');
    }

}