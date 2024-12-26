<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold"><img src="<?php base_url() ?>/images/file-icons/512/list.png" alt="test" srcset="" width="80px" style="padding-right:5px;">List User</h2>
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
      <div class="col-lg-12 grid-margin stretch-card" style="margin-top: 25px;">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama User</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user) : ?>
                    <tr>
                      <td><?= $user->id; ?></td>
                      <td><?= $user->username; ?></td>
                      <td><?= $user->email; ?></td>
                      <td><?= $user->nama_user; ?></td>
                      <?php if ($user->name == 'admin') : ?>
                        <td><label class="badge badge-warning">admin</td>
                        <td></td>
                      <?php else : ?>
                        <td><label class="badge badge-success">user</td>
                        <td>
                          <form action="<?= route_to('hapusUser') ?>" method="post" class="d-inline">
                            <input type="hidden" name="id3" value="<?= $user->id ?>">
                            <input type="hidden" name="hapus3" value="hapus">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(
                              `Apakah anda yakin ingin menghapus user ini?`
                            )">
                              Hapus User
                            </button>
                          </form>
                        </td>
                      <?php endif; ?>

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