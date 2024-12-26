<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserDownload extends Migration
{
    public function up()
    {
        $fields = [
            'id_user'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_buku'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'created_at' => ['type' => 'datetime', 'null' => true]
        ];

        $this->forge->addField($fields);
        $this->forge->addForeignKey('id_user', 'users', 'id', '', '');
        $this->forge->addForeignKey('id_buku', 'ebook', 'id', '', '');
        $this->forge->createTable('user_download', true);
    }

    public function down()
    {
        if ($this->db->DBDriver != 'SQLite3')
        {
            $this->forge->dropForeignKey('user_download', 'user_download_id_user_foreign');
            $this->forge->dropForeignKey('user_download', 'user_download_id_buku_foreign');
        }

        $this->forge->dropTable('user_download', true);
    }
}
