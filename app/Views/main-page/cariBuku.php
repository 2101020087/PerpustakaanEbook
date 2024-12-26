<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="font-weight-bold">
            <?php if (isset($kategori)) : ?>
              <img 
                src="<?php base_url() ?>/images/file-icons/512/<?= $img ?>.png" 
                alt="test" 
                srcset="" 
                width="80px" 
                style="padding-right:5px;">Kategori <?= $kategori ?>
            <?php else : ?>
              <?php echo "$numberRow results for \"$keyword\""?>
            <?php endif; ?>
          </h2>
          <div class="book_list">
            <h1 class="mt-1">
            </h1>
            <?php if(session()->getFlashdata('Sukses')): ?>
            <div class="alert alert-success mt-3" role="alert">
              <?= session()->getFlashdata('Sukses'); ?>
            </div>
            <?php endif; ?>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Kategori</th>
                    <th>Book's Detail</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($listBuku as $ebook) :?>
                  <tr>
                    <th scope="row"><?= $pageNo++; ?></th>
                    <td>
                    <img src="<?= base_url() . "/uploads/cover/{$ebook->sampul}"; ?>" alt="photo" class="sampul" width="auto" height="auto" style="width:7vw;height: auto; border-radius: 5%;" />
                    </td>
                    <td><?= $ebook->judul ?></td>
                    <td>
                      <label class="badge <?= $ebook->badge ?>">
                        <?= $ebook->kategori ?>
                      </label>
                    </td>
                    <td>
                      <a href="<?= base_url('buku/detailBuku')."/{$ebook->slug}" ?>"
                         class="btn btn-success"
                      >Detail
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
              <?= $pager->links('ebook', 'ebook_pagination'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>