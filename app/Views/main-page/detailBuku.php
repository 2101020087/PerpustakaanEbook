<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container p-5 my-5 border" style="margin-top: 20px; padding: auto; border: none">
  <?php if (session()->getFlashdata('Sukses') && in_groups('admin')) : ?>
    <div class="alert alert-success mt-3" role="alert">
      <?= session()->getFlashdata('Sukses'); ?>
    </div>
  <?php endif; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="pembungkus">
          <h2 style="text-align: center;">
            <?= $buku->judul ?>
          </h2>
          <img src="<?= base_url("uploads/cover/$buku->sampul"); ?>" alt="cover" style="width: 100%; border-radius: 10px" />
        </div>
      </div>
      <div class="col-md-8 mt-5">
        <div class="kontainerDetailBuku">
          <h3 style="text-align: center">About this book</h3>

          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Penulis</td>
                  <td><?= $penulis; ?></td>
                </tr>
                <tr>
                  <td>Kategori</td>
                  <td>
                    <label class="badge <?= $buku->badge ?>">
                      <?= $buku->kategori ?>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Tahun Terbit</td>
                  <td>
                    <?= $buku->tahun_terbit; ?>
                  </td>
                </tr>
                <tr>
                  <td>Halaman</td>
                  <td>
                    <?= $buku->halaman; ?>
                  </td>
                </tr>
                <tr>
                  <td>Bahasa</td>
                  <td>
                    <?= $buku->bahasa; ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="sinopsis">
              <?= $buku->sinopsis; ?>
            </p>
            <div class="satubaris ">
              <form action="<?= base_url("Buku/unduhBuku/$buku->file/$buku->id") ?>" method="post" class="d-inline-block p-2">
                <?= csrf_field(); ?>
                <div class="text-left ">
                  <input type="submit" name="download" class="btn btn-outline-warning" value="Unduh PDF"></input>
                </div>
              </form>
              <?php if (in_groups('admin')) : ?>
                <div class="text-left d-inline-block p-2">
                  <a href="<?= base_url("buku/formUbah/{$buku->slug}"); ?>">
                    <button class="btn btn-outline-info">
                      Ubah Buku
                    </button>
                  </a>
                </div>
              <?php endif; ?>
              <?php if (in_groups('admin')) : ?>
                <form action="<?= base_url("Buku/hapusBuku/$buku->slug") ?>" method="post" class="d-inline-block p-2">
                  <div class="text-left">
                    <input type="submit" name="delete" class="btn btn-outline-danger" value="Hapus Buku" onclick="return confirm(
                      `Apakah anda yakin ingin menghapus buku ini?`
                    )"></input>
                  </div>
                </form>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>