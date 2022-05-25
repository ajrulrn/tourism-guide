<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_transactions extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'auto_increment' => TRUE,
                'unsigned' => TRUE 
            ),
            'user_id' => array(
                'type' => 'BIGINT',
                'null' => FALSE
            ),
            'destination_id' => array(
                'type' => 'BIGINT',
                'null' => FALSE
            ),
            'payment_method' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE
            ),
            'subtotal' => array(
                'type' => 'INT',
                'null' => FALSE
            ),
            'num_of_tourist' => array(
                'type' => 'TINYINT',
                'constraint' => '2',
                'null' => FALSE
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => FALSE
            ),
            'inserted_at datetime default current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('transactions');
    }

    public function down()
    {
        $this->dbforge->drop_table('transactions');
    }

}