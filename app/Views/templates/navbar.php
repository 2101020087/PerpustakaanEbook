<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div
    class="
      text-center
      navbar-brand-wrapper
      d-flex
      align-items-center
      justify-content-center
    "
  >
    <a 
      href = "<?= route_to('main-page'); ?>"
      class="navbar-brand brand-logo mr-5"
      ><img 
        src="<?= base_url(); ?>/images/samples/logo_class.png" 
        class="mr-2" 
        alt="logo"
    /></a>
    <a 
      href = "<?= route_to('main-page'); ?>"
      class="navbar-brand brand-logo-mini"
      ><img src="<?= base_url(); ?>/images/samples/logo_mini.jpg" alt="logo"
    /></a>
  </div>
  <div
    class="
      navbar-menu-wrapper
      d-flex
      align-items-center
      justify-content-end
    "
  >
    <button
      class="navbar-toggler navbar-toggler align-self-center"
      type="button"
      data-toggle="minimize"
    >
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div
            class="input-group-prepend hover-cursor"
            id="navbar-search-icon"
          >
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <form action="<?= base_url('buku/cariBuku') ?>" method="get">
            <input
              type="text"
              class="form-control"
              id="navbar-search-input"
              placeholder="Search now"
              aria-label="search"
              aria-describedby="search"
              name="keyword"
            />
          </form>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a
          href="<?php if(logged_in()) 
          echo base_url('logout'); 
          else echo base_url('login'); ?>"
        >
          <button
            type="button"
            class="btn btn-primary btn-rounded btn-fw"
          >
            <?php if(logged_in()) echo 'Logout'; else echo 'Login';?>
          </button>
        </a>
      </li>
    </ul>
    <button
      class="
        navbar-toggler navbar-toggler-right
        d-lg-none
        align-self-center
      "
      type="button"
      data-toggle="offcanvas"
    >
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>