<?php

namespace App\Controllers;

class Admin extends BaseController {

  public function __construct()
  {
    $this->model = new \Myth\Auth\Models\UserModel();
  }

  public function index()
  {

    $this->data = [
      'title' => 'List User',
      'users' => $this->model->getAllUser(),
      'segments' => $this->request->uri->getSegments()
    ];

    return view('admin/index', $this->data);
  }

  public function hapusUser()
  {
    if ($this->request->getVar('hapus3') == null)
      return redirect()->back();
    
    $id = $this->request->getVar('id3');

    $this->model->deleteUserDownload($id);
    $this->model->delete($id);

    session()->setFlashdata('Sukses','Data berhasil dihapus!');
    return redirect()->to(base_url('admin/index'));
  }

  // public function loginUser()
  // {
  //   $this->data = ['title' => 'Login User'];
  //   return view('auth/login-user', $this->data);
  // }

  // public function registerUser()
  // {
  //   $this->data = ['title' => 'Register User'];
  //   return view('auth/register-user', $this->data);
  // }
}
