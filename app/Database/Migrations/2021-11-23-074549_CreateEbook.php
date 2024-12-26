<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEbook extends Migration
{
    public function up()
    {
        $fields = [
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'judul'            => ['type' => 'varchar', 'constraint' => 255],
            'slug'             => ['type' => 'varchar', 'constraint' => 255],
            'kategori'         => ['type' => 'varchar', 'constraint' => 255],
            'tahun_terbit'     => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'halaman'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'bahasa'           => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'sinopsis'         => ['type' => 'varchar', 'constraint' => 2000],
            'viewers'          => ['type' => 'int', 'constraint' => 11, 'default' => 0],
            'sampul'           => ['type' => 'varchar', 'constraint' => 255],
            'file'             => ['type' => 'varchar', 'constraint' => 255],
            'badge'            => ['type' => 'varchar', 'constraint' => 50],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true]
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ebook', true);
    }

    public function down()
    {
		$this->forge->dropTable('ebook', true);
    }
}
