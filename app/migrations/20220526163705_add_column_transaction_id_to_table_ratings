<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_column_transaction_id_to_table_ratings extends CI_Migration {

    public function up()
    {
        $field = array(
            'transaction_id' => array(
                'type' => 'BIGINT',
                'null' => FALSE
            )
        );
        $this->dbforge->add_column('ratings', $field);
    }

    public function down()
    {
        $this->dbforge->drop_column('ratings', 'transaction_id');
    }

}