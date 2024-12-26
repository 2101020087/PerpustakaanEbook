<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model {
  protected $DBGroup              = 'default';
  protected $table                = 'ebook';
  protected $primaryKey           = 'id';
  protected $useAutoIncrement     = true;
  protected $insertID             = 0;
  protected $returnType           = 'object';
  protected $useSoftDeletes       = false;
  protected $protectFields        = true;
  protected $allowedFields        = [
    'judul', 'slug', 'kategori', 'tahun_terbit', 'halaman',
    'bahasa', 'sinopsis', 'viewers', 'sampul', 'file', 'badge',
    'created_at', 'updated_at'
  ];

  // Dates
  protected $useTimestamps        = true;
  protected $dateFormat           = 'datetime';
  protected $createdField         = 'created_at';
  protected $updatedField         = 'updated_at';
  protected $deletedField         = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks       = true;
  protected $beforeInsert         = [];
  protected $afterInsert          = [];
  protected $beforeUpdate         = [];
  protected $afterUpdate          = [];
  protected $beforeFind           = [];
  protected $afterFind            = [];
  protected $beforeDelete         = [];
  protected $afterDelete          = [];

  public function getAllBooks() 
  {
    return $this->select('id, judul, slug, kategori, sampul, badge')
      ->orderBy('viewers', 'DESC');
  }

  public function getBookBySlug($slug)
  {
    return $this->where('slug', $slug)->first();
  }

  public function getIdBySlug($slug)
  {
    return $this->where('slug', $slug)->first()->id;
  }

  public function getFieldBySlug($column, $slug)
  {
    return $this->select($column)->where('slug', $slug)->first();
  }

  public function updateViewers($slug)
  {
    $this->where('slug', $slug)->set('viewers', 'viewers + 1', false)->update();
  }

  public function addPenulisBuku($slug, $idPenulis)
  {
    $this->db->table('ebook_has_penulis')->insert([
      'id_buku' => $this->getIdBySlug($slug),
      'id_penulis' => $idPenulis
    ]);
  }

  public function getPenulisBuku($slug)
  {
    $query = $this->select('penulis.id, penulis.nama_penulis')
      ->join('ebook_has_penulis', 'ebook_has_penulis.id_buku = ebook.id')
      ->join('penulis', 'ebook_has_penulis.id_penulis = penulis.id')
      ->where('ebook.slug', $slug)
      ->get();
    return $query->getResultArray();
  }

  public function deletePenulisBuku($kolom, $id)
  {
    $this->db->table('ebook_has_penulis')
      ->where($kolom, $id)
      ->delete();
  }

  public function deleteBuku($slug)
  {
    $idBuku = $this->getIdBySlug($slug);
    $this->deletePenulisBuku('id_buku', $idBuku);

    $this->db->table('user_download')
      ->where('id_buku', $idBuku)
      ->delete();

    $this->where('slug', $slug)->delete();
  }

  public function cariBuku($keyword)
  {
    return $this->select('id, judul, slug, kategori, sampul, badge')
      ->like('judul',$keyword)
      ->orLike('kategori',$keyword)
      ->orderBy('viewers', 'DESC');
  }

  public function getBukuByKategori($kategori) 
  {
    return $this->select('id, judul, slug, kategori, sampul, badge')
      ->like('kategori',$kategori)
      ->orderBy('viewers', 'DESC');
  }

}
