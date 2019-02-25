<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_portfolio extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE
            ),
            'stat' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE,
                'default' => 1
            ),
            'created_at' => array(
                'type' => 'DATE',
                'null' => TRUE
            ),
            'updated_at' => array(
                'type' => 'DATE',
                'null' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('portfolio');

        $data = array(
            array('title' => 'text1','image' => 'image1.jpg'),
            array('title' => 'text2','image' => 'image2.jpg')
        );
        $this->db->insert_batch('portfolio', $data);
    }

    public function down() {
        $this->dbforge->drop_table('portfolio');
    }

}