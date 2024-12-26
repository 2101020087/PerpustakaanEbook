<?php

namespace App\Controllers;

class Buku extends BaseController {

  protected $modelPenulis;
  protected $badgeKategori;

  public function __construct()
  {
    $this->model = new \App\Models\BukuModel();
    $this->modelPenulis =new \App\Models\PenulisModel();
    $this->badgeKategori = [
      'Teknologi' => 'badge-info',
      'Kesenian' => 'badge-primary',
      'Lingkungan' => 'badge-success',
      'Sains' => 'badge-dark',
      'Sosial' => 'badge-warning'	
    ];
  }

  public function index()
  {
    // $listBuku = $this->model->getAllBooks();
    // dd($listBuku);
    
    $segments = $this->request->uri->getSegments();
    $this->data = [
      'title' => 'Daftar Buku',
      'segments' => $segments,
      // 'penulis' => $this->model->findAll()
    ];
    return view('admin/buku/listBuku', $this->data);
  }

  public function formTambah()
  {
    $segments = $this->request->uri->getSegments();

    $oldPenulis = [];
    if (old('penulis') != null) 
      $oldPenulis = old('penulis');
    
    $this->data = [
      'title' => 'Form Tambah Penulis',
      'segments' => $segments,
      'penulis' => $this->modelPenulis->findAll(),
      'error' => session()->getFlashdata('errors'),
      'kategori' =>  ['Teknologi','Kesenian','Lingkungan','Sains','Sosial'],
      'oldPenulis' => $oldPenulis
    ];
    return view('admin/buku/formTambahBuku', $this->data);
  }

  public function tambah()
  {
    if (!$this->validate([
      'judul'=> [
        'rules' => 'is_unique[ebook.judul]',
        'errors' => [
            'is_unique' => 'ebook sudah terdaftar'
        ]
      ],
      'ebook'=> [
        'rules' => 'mime_in[ebook,application/pdf]',
        'errors' => [
            'mime_in' => 'File harus berformat pdf'
        ]
      ],
      'cover' => [
        'rules' => 'mime_in[cover,image/jpg,image/png,image/jpeg]',
        'errors' => [
            'mime_in' => 'Cover harus berformat jpg, jpeg, atau png',
        ]
      ]
    ]))
    {
      $validation = \Config\Services::validation();
      session()->setFlashdata('errors', $validation->getErrors());
      return redirect()->to(base_url('buku/formTambah'))->withInput();
    }

    $cover = $this->request->getFile('cover');
    $namaCover = $cover->getRandomName();

    $ebook = $this->request->getFile('ebook');
    $namaEbook = $ebook->getRandomName();

    
    
    $judul = $this->request->getVar('judul');
    $slug = url_title($judul, '_', true);
    $penulis = $this->request->getVar('penulis[]');
    
    $this->model->save([
      'judul' => $judul,
      'slug' =>  $slug,
      'kategori' => $this->request->getVar('kategori'),
      'tahun_terbit' => $this->request->getVar('tahunTerbit'),
      'halaman' => $this->request->getVar('halaman'),
      'bahasa' => $this->request->getVar('bahasa'),
      'sinopsis' => $this->request->getVar('sinopsis'),
      'sampul' => $namaCover,
      'file' => $namaEbook,
      'badge' => $this->badgeKategori["{$this->request->getVar('kategori')}"]
    ]);

    foreach ($penulis as $value) 
     $this->model->addPenulisBuku($slug, $value);

    $cover->move('uploads/cover/', $namaCover);
    $ebook->move('uploads/file/', $namaEbook);
    session()->setFlashdata('Sukses', 'Ebook berhasil ditambahkan');
    return redirect()->to(base_url('home/ebook'));
  }

  public function detailBuku($slug) 
  {
    $this->model->updateViewers($slug);
    $buku = $this->model->getBookBySlug($slug);
    $listPenulis = $this->model->getPenulisBuku($slug);
    
    $penulis = '';
    for ($i = 0; $i < sizeof($listPenulis) - 1; $i++)
      $penulis .= $listPenulis[$i]['nama_penulis'] . ', ';
    $penulis .= $listPenulis[sizeof($listPenulis) - 1]['nama_penulis'];

    $this->data = [
      'title' => $buku->judul,
      'buku' => $buku,
      'penulis' => $penulis,
    ];
    return view('main-page/detailBuku', $this->data);
  }

  public function unduhBuku($namaFile, $idBuku)
  {
    if($this->request->getPost('download') !== null) {
      $user = new \Myth\Auth\Models\UserModel();
      $user->addUserDownload(user()->id, $idBuku);
      return $this->response->download("uploads/file/$namaFile", null);
    }
  }

  public function formUbah($slug)
  {
    $segments = $this->request->uri->getSegments();
    $penulis = $this->modelPenulis->findAll();
    $buku = $this->model->getBookBySlug($slug);

    if (old('penulis') != null) 
    {
      $penulisBuku = old('penulis');
      $isRepeat = true;
      $kategoriBuku = old('kategori');
      $penulisBuku = old('penulis');
    }
    else
    {
      $isRepeat = false;
      $kategoriBuku = $buku->kategori;
      $penulisBuku = [];
      foreach ($this->model->getPenulisBuku($slug) as $value) 
        array_push($penulisBuku, $value['id']);
    }

    $this->data = [
      'title' => 'Form Tambah Penulis',
      'segments' => $segments,
      'penulis' => $this->modelPenulis->findAll(),
      'error' => session()->getFlashdata('errors'),
      'kategori' =>  ['Teknologi','Kesenian','Lingkungan','Sains','Sosial'],
      'buku' => $buku,
      'isRepeat' => $isRepeat,
      'penulisBuku' => $penulisBuku,
      'kategoriBuku' => $kategoriBuku,
      'penulisBuku' => $penulisBuku
    ];
    return view('admin/buku/formUbahBuku', $this->data);;
  }

  public function ubah()
  {
    if($this->request->getVar('ubah') == null)
      return redirect()->back();
      
    $judul = $this->request->getVar('judul');
    $slug = $this->request->getVar('slug');
    $cover = $this->request->getFile('cover');
    $ebook = $this->request->getFile('ebook');
    $bukuLama = $this->model->getBookBySlug($slug);
    $penulisLama = $this->model->getPenulisBuku($slug);
    $validates = [];

    $ruleJudul = $bukuLama->judul != $judul ? 'is_unique[ebook.judul]' : '';

    if ($ruleJudul != '')
      $validates['judul'] = [
        'rules' => $ruleJudul,
        'errors' => ['is_unique' => 'ebook sudah terdaftar']
      ];
    
    if ($cover->getError() == 0)    
      $validates['cover'] = [
        'rules' => 'mime_in[cover,image/jpg,image/png,image/jpeg]',
        'errors' => ['mime_in' => 'Cover harus berformat jpg, jpeg, atau png']
      ];

    if ($ebook->getError() == 0)
      $validates['ebook'] = [
        'rules' => 'mime_in[ebook,application/pdf]',
        'errors' => ['mime_in' => 'File harus berformat pdf']
      ];
    
    if (!$this->validate($validates) && $ruleJudul != '')
    {
      $validation = \Config\Services::validation();
      session()->setFlashdata('errors', $validation->getErrors());
      return redirect()->to(base_url("buku/formUbah/$slug"))->withInput();
    }

    $namaCover = $bukuLama->sampul;
    $namaEbook = $bukuLama->file;

    if ($cover->getError() == 0)
    {
      unlink("uploads/cover/$namaCover");
      $namaCover = $cover->getRandomName();
      $cover->move('uploads/cover/', $namaCover);
    }

    if ($ebook->getError() == 0)
    {
      unlink("uploads/file/$namaEbook");
      $namaEbook = $ebook->getRandomName();
      $ebook->move('uploads/file/', $namaEbook);
    }

    $this->model->save([
      'id' => $this->request->getVar('id'),
      'judul' => $judul,
      'kategori' => $this->request->getVar('kategori'),
      'tahun_terbit' => $this->request->getVar('tahunTerbit'),
      'halaman' => $this->request->getVar('halaman'),
      'bahasa' => $this->request->getVar('bahasa'),
      'sinopsis' => $this->request->getVar('sinopsis'),
      'sampul' => $namaCover,
      'file' => $namaEbook,
      'badge' => $this->badgeKategori["{$this->request->getVar('kategori')}"]
    ]);

    $penulisLama = $this->model->getPenulisBuku($slug);
    foreach ($penulisLama as $penulis)
      $this->model->deletePenulisBuku('id_buku', $bukuLama->id);

    foreach ($this->request->getVar('penulis') as $penulis)
      $this->model->addPenulisBuku($slug, $penulis);

    session()->setFlashdata('Sukses', 'Buku berhasil diubah');
    return redirect()->to(base_url("buku/detailBuku/$slug"));
  }

  public function hapusBuku($slug)
  {
    if ($this->request->getPost('delete') !== null)
    {
      $namaCover = $this->model->getFieldBySlug('sampul', $slug);
      $namaFile = $this->model->getFieldBySlug('file', $slug);
      unlink("uploads/cover/$namaCover->sampul");
      unlink("uploads/file/$namaFile->file");
      $this->model->deleteBuku($slug);

      session()->setFlashdata('Sukses', 'Buku berhasil dihapus');
      return redirect()->to(base_url('home/ebook'));
    }
    return redirect()->back();
  }

  public function cariBuku()
  {
    $keyword = $this->request->getVar('keyword');

    $current_page = $this->request->getVar('page_ebook') ? 
        $this->request->getVar('page_ebook') : 1;

    if ($keyword == null)
      return redirect()->back();

    $this->data = [
      'title' => 'Ebook',
      'keyword' => $keyword,
      'segments' => $this->request->uri->getSegments(),
      'listBuku' => $this->model->cariBuku($keyword)->paginate(6, 'ebook'),
      'pager' => $this->model->pager,
      'numberRow' => $this->model->cariBuku($keyword)->countAllResults(),
      'pageNo' => 1 + (($current_page - 1) * 6)
    ];

    return view('main-page/cariBuku', $this->data);
  }

  public function getKategori($kategori)
  {
    switch ($kategori) {
      case 'Teknologi':
        $img = 'tech';
        break;
      case 'Kesenian':
        $img = 'art';
        break;
      case 'Lingkungan':
        $img = 'nature';
        break;
      case 'Sains':
        $img = 'science';
        break;
      case 'Sosial':
        $img = 'social';
        break;
      default:
        return redirect()->back();
      }
    
    $current_page = $this->request->getVar('page_ebook') ? 
        $this->request->getVar('page_ebook') : 1;

    $this->data = [
      'title' => $kategori,
      'kategori' => $kategori,
      'listBuku' => $this->model->getBukuByKategori($kategori)
        ->paginate(6, 'ebook'),
      'pager' => $this->model->pager,
      'numberRow' => $this->model->getBukuByKategori($kategori)
        ->countAllResults(),
      'pageNo' => 1 + (($current_page - 1) * 6),
      'img' => $img
    ];

    return view('main-page/cariBuku', $this->data);
  }
}