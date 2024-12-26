<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEbookHasPenulis extends Migration {
    public function up() 
    {
        $fields = [
            'id_buku'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_penulis'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
        ];

        $this->forge->addField($fields);
        $this->forge->addForeignKey('id_buku', 'ebook', 'id', '', '');
        $this->forge->addForeignKey('id_penulis', 'penulis', 'id', '', '');
        $this->forge->createTable('ebook_has_penulis', true);
    }

    public function down() 
    {
        if ($this->db->DBDriver != 'SQLite3') // @phpstan-ignore-line
        {
            $this->forge->dropForeignKey('ebook_has_penulis', 'ebook_has_penulis_id_buku_foreign');
            $this->forge->dropForeignKey('ebook_has_penulis', 'ebook_has_penulis_id_penulis_foreign');
        }

        $this->forge->dropTable('ebook_has_penulis', true);
    }
}
