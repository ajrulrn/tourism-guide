<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_chats extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'auto_increment' => TRUE,
                'unsigned' => TRUE 
            ),
            'sender_user_id' => array(
                'type' => 'BIGINT',
                'null' => FALSE
            ),
            'receiver_user_id' => array(
                'type' => 'BIGINT',
                'null' => FALSE
            ),
            'message' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => FALSE
            ),
            'inserted_at datetime default current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('chats');
    }

    public function down()
    {
        $this->dbforge->drop_table('chats');
    }

}