<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold"><img src="<?php base_url() ?>/images/file-icons/512/userprofile.png" alt="test" srcset="" width="80px" style="padding-right:5px;">My Profile</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-12">
            <?php if (session()->getFlashdata('Sukses')) : ?>
              <div class="alert alert-success mt-3" role="alert">
                <?= session()->getFlashdata('Sukses'); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card" style="margin: 0 auto;">
        <div class="card data-icon-card-primary">
          <div class="card-body">
            <div class="name" style="text-align: center;">
              <h3><?= user()->nama_user; ?></h3>
            </div>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <p class="text-white"><strong>Email</strong></p>
                    </td>
                    <td>
                      <p class="text-white"><?= user()->email ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="text-white"><strong>Username</strong></p>
                    </td>
                    <td>
                      <p class="text-white"><?= user()->username ?></p>
                    </td>
                  </tr>
                  <?php if (in_groups('admin')) : ?>
                    <tr>
                      <td>
                        <p class="text-white"><strong>Role</strong></p>
                      </td>
                      <td>
                        <p class="text-white">Admin</p>
                      </td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
              <a href="<?= base_url("/user/formUbahNama") ?>">
                <button type="button" class="btn btn-warning btn-sm">
                  Ubah Nama</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card" style="margin-top: 25px;">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Downloaded Books</h4>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($books as $book) : ?>
                    <tr>
                      <td>1</td>
                      <td>
                        <a href="<?= base_url("buku/detailBuku/$book->slug"); ?>" 
                          <?= $book->judul ?>
                        </a>
                      </td>
                      <td>
                        <label class="badge <?= $book->badge ?>">
                          <?= $book->kategori; ?>
                        </label>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>

<!-- 
<h1>Profile</h1>

      <div class="card data-icon-card-primary">
                      <div class="card-body">
                        <p class="card-title text-white">Number of Meetings</p>
                        <div class="row">
                          <div class="col-8 text-white">
                            <h3>34040</h3>
                            <p class="text-white font-weight-500 mb-0">
                              The total number of sessions within the date
                              range.It is calculated as the sum .
                            </p>
                          </div>
                          <div class="col-4 background-icon"></div>
                        </div>
                      </div>
                    </div>  
<div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="book_list">
            <h1 class="mt-1">Editor's Choice</h1>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Cover</th>
                  <th scope="col">Title</th>
                  <th scope="col">Book's Detail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="book_list">
            <h1 class="mt-1">Editor's Choice</h1>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Cover</th>
                  <th scope="col">Title</th>
                  <th scope="col">Book's Detail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>
                    <img
                      src=""
                      alt="photo"
                      class="sampul"
                      width="100"
                    />
                  </td>
                  <td>Pemrograman Dasar</td>
                  <td><a href="" class="btn btn-success">Detail</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->