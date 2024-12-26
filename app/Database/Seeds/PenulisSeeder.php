<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenulisSeeder extends Seeder {
  public function run() {

    $data = [
      [
        'nama_penulis'     => 'A. Bobby Chandra',
        'created_at'       => '2021-12-01 12:15:44',
        'updated_at'       => '2021-12-01 12:15:44'
      ],
      [
        'nama_penulis'     => 'Douglas Fisher',
        'created_at'       => '2021-12-01 12:16:05',
        'updated_at'       => '2021-12-01 12:16:05'
      ],
      [
        'nama_penulis'     => 'James Tanton',
        'created_at'       => '2021-12-01 12:16:16',
        'updated_at'       => '2021-12-01 12:16:16'
      ],
      [
        'nama_penulis'     => 'James Patterson',
        'created_at'       => '2021-12-01 16:21:37',
        'updated_at'       => '2021-12-01 16:21:37'
      ],
      [
        'nama_penulis'     => 'Katy Schwalbe',
        'created_at'       => '2021-12-01 16:21:43',
        'updated_at'       => '2021-12-01 16:21:43'
      ],
      [
        'nama_penulis'     => 'John M. Zelle',
        'created_at'       => '2021-12-01 16:21:51',
        'updated_at'       => '2021-12-01 16:21:51'
      ],
      [
        'nama_penulis'     => 'Jeffrey A Winters',
        'created_at'       => '2021-12-01 17:40:52',
        'updated_at'       => '2021-12-01 17:40:52'
      ],
      [
        'nama_penulis'     => 'Elliot Aronson',
        'created_at'       => '2021-12-01 17:41:02',
        'updated_at'       => '2021-12-01 17:41:02'
      ],
      [
        'nama_penulis'     => 'Erman Rajagukguk',
        'created_at'       => '2021-12-01 17:41:12',
        'updated_at'       => '2021-12-01 17:41:12'
      ],
      [
        'nama_penulis'     => 'Quentin Wodon',
        'created_at'       => '2021-12-01 18:04:06',
        'updated_at'       => '2021-12-01 18:04:06'
      ],
      [
        'nama_penulis'     => 'Jared Diamond',
        'created_at'       => '2021-12-01 18:04:17',
        'updated_at'       => '2021-12-01 18:04:17'
      ],
      [
        'nama_penulis'     => 'Scott E. Spoolman',
        'created_at'       => '2021-12-01 18:04:43',
        'updated_at'       => '2021-12-01 18:04:43'
      ],
      [
        'nama_penulis'     => 'Brian Fairrington',
        'created_at'       => '2021-12-01 18:11:19',
        'updated_at'       => '2021-12-01 18:11:19'
      ],
      [
        'nama_penulis'     => 'I Nyoman Astita',
        'created_at'       => '2021-12-01 18:11:27',
        'updated_at'       => '2021-12-01 18:11:27'
      ],
      [
        'nama_penulis'     => 'Th. Esti Wuryansari Ernawati Purwaningsih',
        'created_at'       => '2021-12-01 18:11:35',
        'updated_at'       => '2021-12-01 18:11:35'
      ],
    ];

    // Using Query Builder
    $this->db->table('penulis')->insertBatch($data);
  }
}