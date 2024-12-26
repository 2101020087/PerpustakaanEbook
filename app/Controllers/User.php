<?php

namespace App\Controllers;

class User extends BaseController {
  public function __construct() 
  {
    $this->model = new \Myth\Auth\Models\UserModel();
  }

  public function index()
  {
    $segments = $this->request->uri->getSegments();
    if (!isset($segments[1]))
      array_push($segments, ' ');

    $this->data = [
      'title' => 'My Profile',
      'segments' => $segments,
      'books' => $this->model->getUserDownload(user()->id)
    ];
    return view('user-profile/index', $this->data);
  }

  public function logout()
  {
    $this->model->logout();
    return redirect()->to('/');
  }

  public function formUbahNama()
  {
    $this->data = [
      'title' => 'Ubah Nama',
      'id' => user()->id,
      'nama' => user()->nama_user
    ];
    return view('user-profile/formUbahNama', $this->data);
  }

  public function ubahNama()
  {
    if ($this->request->getVar('ubah') == null)
      return redirect()->back();

    $this->model->save([
      'id' => user()->id,
      'nama_user' => $this->request->getVar('nama')
    ]);

    session()->setFlashdata('Sukses', 'Nama berhasil diubah');
    return redirect()->to(base_url('user'));
  }
}
