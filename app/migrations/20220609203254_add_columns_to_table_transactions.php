<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_columns_to_table_transactions extends CI_Migration {

    public function up()
    {
        $field = array(
            'trip_date' => array(
                'type' => 'DATE',
                'null' => FALSE
            ),
            'va_number' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => TRUE
            ),
            'transaction_expiration_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            )
        );
        $this->dbforge->add_column('transactions', $field);
    }

    public function down()
    {
        $this->dbforge->drop_column('transactions', 'trip_date');
        $this->dbforge->drop_column('transactions', 'va_number');
        $this->dbforge->drop_column('transactions', 'transaction_expiration_date');
    }

}