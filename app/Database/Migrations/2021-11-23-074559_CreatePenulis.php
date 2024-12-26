<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenulis extends Migration
{
    public function up()
    {
        $fields = [
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_penulis'     => ['type' => 'varchar', 'constraint' => 255],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('penulis', true);
    }

    public function down()
    {
        $this->forge->dropTable('penulis', true);
    }
}
