<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ubah Penulis</h4>
            <?php if(session()->getFlashdata('Gagal')): ?>
            <div class="alert alert-danger mt-3" role="alert">
              <?= session()->getFlashdata('Gagal'); ?>
            </div>
            <?php endif; ?>
            <form 
              class="forms-sample"
              action="<?= route_to('ubahPenulis');?>"
              method="post"
            >
              <?= csrf_field(); ?>
              <div class="form-group">
                <label for="exampleInputUsername1">Nama Penulis</label>
                <input
                  type="text"
                  class="form-control"
                  name="nama_penulis"
                  id="exampleInputUsername1"
                  value="<?= old('nama_penulis' ,$penulis->nama_penulis) ?>"
                  required
                />
                <input type="hidden" name="id" value="<?= $penulis->id ?>">
              </div>
              <input type="submit" class="btn btn-primary mr-2" name="ubah">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>