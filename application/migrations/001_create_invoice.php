<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_invoice extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('invoice');
        }

        public function down()
        {
                $this->dbforge->drop_table('invoice');
        }
}
