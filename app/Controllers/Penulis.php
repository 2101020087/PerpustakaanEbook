<?php

namespace App\Controllers;

class Penulis extends BaseController {

  public function __construct()
  {
    $this->model = new \App\Models\PenulisModel();
  }

  public function index()
  {
    $segments = $this->request->uri->getSegments();
    $this->data = [
      'title' => 'Daftar Penulis',
      'segments' => $segments,
      'penulis' => $this->model->findAll()
    ];
    return view('admin/penulis/listPenulis', $this->data);
  }

  public function formTambah()
  {
    $this->data = ['title' => 'Form Tambah Penulis'];
    return view('admin/penulis/formTambahPenulis', $this->data);
  }

  public function tambah()
  {
    if($this->request->getVar('tambah') == null)
      return redirect()->back();
  
    if (!$this->validate([
      'nama_penulis' => 'is_unique[penulis.nama_penulis]'
    ])) {
      session()->setFlashdata('Gagal','Nama penulis sudah ada');
      return redirect()->to(base_url(). "/penulis/formTambah");
    }
    
    $this->model->save([
      'nama_penulis' => $this->request->getVar('nama_penulis')
    ]);

    session()->setFlashdata('Sukses','Data berhasil ditambahkan!');

    return redirect()->to(base_url() . '/penulis');
  }

  public function formUbah($id)
  {
    $penulis = $this->model->find($id);

    $this->data = [
      'title' => 'Form Ubah Penulis',
      'penulis' => $penulis
    ];
    return view('admin/penulis/formUbahPenulis', $this->data);
  }

  public function ubah()
  {
    if($this->request->getVar('ubah') == null)
      return redirect()->back();

    if (!$this->validate([
      'nama_penulis' => 'is_unique[penulis.nama_penulis]'
    ])) {
      session()->setFlashdata('Gagal','Nama penulis sudah ada');
      return redirect()->to(base_url(). "/penulis/formUbah/{$this->request->getVar('id')}");
    }

    $this->model->save([
      'id' => $this->request->getVar('id'),
      'nama_penulis' => $this->request->getVar('nama_penulis')
    ]);

    session()->setFlashdata('Sukses','Data berhasil diubah!');

    return redirect()->to(base_url() . '/penulis');
  }

  public function hapus()
  {
    if ($this->request->getVar('hapus2') == null) 
      return redirect()->back();

    $bukuModel = new \App\Models\BukuModel();
    $id = $this->request->getVar('id2');

    $bukuModel->deletePenulisBuku('id_penulis', $id);
    $this->model->delete($id);

    session()->setFlashdata('Sukses','Data berhasil dihapus!');
    return redirect()->to(base_url() . '/penulis');
  }
}