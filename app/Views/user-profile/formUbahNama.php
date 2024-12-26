<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ubah Nama</h4>
            <form 
              class="forms-sample"
              action="<?= base_url('user/ubahNama'); ?>"
              method="post"
            >
              <?= csrf_field(); ?>
              <div class="form-group">
                <label for="exampleInputUsername1">Nama User</label>
                <input
                  type="text"
                  class="form-control"
                  name="nama"
                  id="exampleInputUsername1"
                  value="<?= old('nama' ,$nama) ?>"
                  required
                />
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