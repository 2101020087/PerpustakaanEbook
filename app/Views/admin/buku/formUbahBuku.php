<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin">
    <?php if (session()->getFlashdata('Sukses') && in_groups('admin')) : ?>
      <div class="alert alert-danger mt-3" role="alert">
        <?= session()->getFlashdata('errors'); ?>
      </div>
    <?php endif; ?>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Ubah Buku</h4>
          <form class="form-sample" action="<?= route_to('ubahBuku'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Judul Buku</label>
                  <div class="col-sm-9">
                    <input type="text" class="
                        form-control 
                        <?= isset($error['judul']) ? 'is-invalid' : ''; ?>
                      " name="judul" value="<?= $isRepeat ? old('judul') : $buku->judul; ?>" required />
                    <div class="invalid-feedback">
                      <?= isset($error['judul']) ? $error['judul'] : ''; ?>
                    </div>
                    <input type="hidden" name="slug" value='<?= $buku->slug; ?>'>
                    <input type="hidden" name="id" value='<?= $buku->id; ?>'>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kategori Buku</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="kategori" required>
                      <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k; ?>" <?= $kategoriBuku == $k ? 'selected' : ''; ?>><?= $k; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Penulis Buku</label>
                  <div class="col-sm-5">
                    <select class="js-example-basic-multiple w-100" multiple="multiple" name="penulis[]" required>
                      <?php foreach ($penulis as $value) : ?>
                        <option value="<?= $value->id ?>" <?= in_array($value->id, $penulisBuku) ?
                                                            'selected' : ''; ?>>
                          <?= $value->id . ' - ' . $value->nama_penulis; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tahun Terbit</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="tahunTerbit" value="<?= $isRepeat ?
                                                                                          old('tahunTerbit') : $buku->tahun_terbit ?>" max=<?= date('Y') ?> required />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Halaman</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="halaman" value="<?= $isRepeat ? old('halaman') : $buku->halaman ?>" required />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Bahasa</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="bahasa" value="<?= $isRepeat ? old('bahasa') : $buku->bahasa ?>" required />
                  </div>
                </div>
              </div>
            </div>
            <p class="card-description">Sinopsis</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <textarea class="form-control" id="exampleTextarea1" rows="8" name="sinopsis" required><?= $isRepeat ? old('sinopsis') : $buku->sinopsis ?>
                  </textarea>
                  </div>
                </div>
              </div>
            </div>
            <p class="card-description">Upload Cover Buku</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="file" name="cover" class="file-upload-default" accept="image/png, image/jpg, image/jpeg" />
                    <div class="input-group col-xs-12">
                      <input type="text" class="
                          form-control
                          file-upload-info
                          <?= isset($error['cover']) ? 'is-invalid' : ''; ?> 
                        " disabled placeholder=".jpg/.jpeg/.png" />
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">
                          Upload
                        </button>
                      </span>
                      <div class="invalid-feedback">
                        <?= isset($error['cover']) ? $error['cover'] : ''; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="card-description">Upload File Buku</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="file" name="ebook" class="file-upload-default" accept="application/pdf" />
                    <div class="input-group col-xs-12">
                      <input type="text" class="
                          form-control 
                          file-upload-info
                          <?= isset($error['ebook']) ? 'is-invalid' : ''; ?> 
                        " disabled placeholder=".pdf" />
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">
                          Upload
                        </button>
                      </span>
                      <div class="invalid-feedback">
                        <?= isset($error['ebook']) ? $error['ebook'] : ''; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" name='ubah' class="btn btn-primary mr-2">
            <a href="<?= route_to('listPenulis'); ?>">
              <button class="btn btn-light">Cancel</button>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>