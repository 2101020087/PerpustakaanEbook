<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold"><img src="<?php base_url() ?>/images/file-icons/512/writer.png" alt="test" srcset="" width="80px" style="padding-right:5px;">List Penulis</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card" style="margin-top: 25px;">
        <div class="card">
          <div class="card-body">
            <a href="<?= route_to('formTambahPenulis'); ?>">
              <button type="button" class="btn btn-success">Tambah Penulis</button>
            </a>
            <?php if (session()->getFlashdata('Sukses')) : ?>
              <div class="alert alert-success mt-3" role="alert">
                <?= session()->getFlashdata('Sukses'); ?>
              </div>
            <?php endif; ?>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID Penulis</th>
                    <th>Nama Penulis</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($penulis as $val) : ?>
                    <tr>
                      <td><?= $val->id ?></td>
                      <td><?= $val->nama_penulis ?></td>
                      <td>
                        <a href="<?= base_url("/penulis/formUbah/$val->id") ?>">
                          <button type="button" class="btn btn-info btn-sm">
                            Ubah Nama</button>
                        </a>
                        <form action="<?= base_url("penulis/hapus") ?>" method="post" class="d-inline">
                          <input type="hidden" name="id2" value="<?= $val->id ?>">
                          <input type="hidden" name="hapus2" value="hapus">
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(
                            `Apakah anda yakin ingin menghapus penulis ini?`
                          )">
                            Hapus
                          </button>
                        </form>
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