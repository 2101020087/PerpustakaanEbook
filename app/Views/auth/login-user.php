<?= $this->extend('auth/templates/index') ?>

<?= $this->section('content') ?>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="<?= base_url();?>/images/samples/logo_class.png" alt="logo" />
            </div>
            <h4>Selamat datang di Ebook!</h4>
            <h6 class="font-weight-light">Log in</h6>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form class="pt-3" action="<?= route_to('login') ?>" method="post">
              <?= csrf_field() ?>

              <?php if ($config->validFields === ['email']): ?>
              <div class="form-group">
                <input
                  type="email"
                  class="
                    form-control
                    form-control-lg
                    <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>
                  "
                  name="login"
                  id="exampleInputEmail1"
                  placeholder="<?=lang('Auth.email')?>"
                  required
                />
                <div class="invalid-feedback">
								  <?= session('errors.login') ?>
							  </div>
              </div>
              <?php else: ?>
              <div class="form-group">
                <input
                  type="text"
                  class="
                    form-control
                    form-control-lg
                    <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>
                  "
                  name="login"
                  id="exampleInputEmail1"
                  placeholder="<?=lang('Auth.emailOrUsername')?>"
                  required
                />
                <div class="invalid-feedback">
								  <?= session('errors.login') ?>
							  </div>
              </div>
              <?php endif; ?>

              <div class="form-group">
                <input
                  type="password"
                  class="
                    form-control 
                    form-control-lg
                    <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>
                  "
                  id="exampleInputPassword1"
                  name="password"
                  placeholder="<?=lang('Auth.password')?>"                
                  required
                />
                <div class="invalid-feedback">
								  <?= session('errors.password') ?>
						  	</div>
              </div>
              <div class="mt-3">
                <button
                  type="submit"
                  class="
                    btn btn-block btn-primary btn-lg
                    font-weight-medium
                    auth-form-btn
                  "
                  ><?=lang('Auth.loginAction')?>
                </button>
              </div>
              <div
                class="
                  my-2
                  d-flex
                  justify-content-between
                  align-items-center
                "
              >
                <?php if ($config->allowRemembering): ?>
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input 
                      type="checkbox" 
                      class="form-check-input"
                      <?php if(old('remember')) : ?> checked <?php endif ?>
                      name = "remember" 
                    />
                      Biarkan saya tetap masuk
                    <i class="input-helper"></i>
                  </label>
                </div>
                <?php endif; ?>
                <?php if ($config->activeResetter) : ?>
                <a 
                  href="<?= route_to('forgot') ?>"
                  class="auth-link text-black"
                  ><?=lang('Auth.forgotYourPassword')?></a
                >
                <?php endif; ?>
              </div>
              <?php if ($config->allowRegistration) : ?>
              <div class="text-center mt-4 font-weight-light">
                Belum terdaftar?
                <a
                  href="<?= route_to('register') ?>"
                  class="text-primary">Buat akun</a
                >
              </div>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<?= $this->endSection() ?>