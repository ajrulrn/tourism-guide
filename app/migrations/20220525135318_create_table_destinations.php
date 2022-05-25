<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_destinations extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'auto_increment' => TRUE,
                'unsigned' => TRUE 
            ),
            'region_code' => array(
                'type' => 'VARCHAR',
                'constraint' => '13',
            ),
            'user_id' => array(
                'type' => 'BIGINT',
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'price' => array(
                'type' => 'INT'
            ),
            'description' => array(
                'type' => 'TEXT',
            ),
            'duration' => array(
                'type' => 'TINYINT',
                'constraint' => '2'
            ),
            'min_tourist' => array(
                'type' => 'TINYINT',
                'constraint' => '2',
            ),
            'max_tourist' => array(
                'type' => 'TINYINT',
                'constraint' => '2'
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '175'
            ),
            'is_published' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'default' => 0
            ),
            'is_have_timeline' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'default' => 0
            ),
            'inserted_at datetime default current_timestamp'
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('destinations');
    }

    public function down()
    {
        $this->dbforge->drop_table('destinations');
    }

}