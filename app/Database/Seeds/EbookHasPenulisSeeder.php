<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EbookHasPenulisSeeder extends Seeder {
  public function run() {

    $data = [];

    for ($i = 1; $i <= 15; $i++) 
      $data[] = [
        'id_buku' => $i,
        'id_penulis' => $i,
      ];
      

    // Using Query Builder
    $this->db->table('ebook_has_penulis')->insertBatch($data);
  }
}