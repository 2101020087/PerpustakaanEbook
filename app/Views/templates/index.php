<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title><?= $title; ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/vendors/feather/feather.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/vendors/ti-icons/css/themify-icons.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/vendors/css/vendor.bundle.base.css" />
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url(); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/vendors/ti-icons/css/themify-icons.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/js/select.dataTables.min.css" />
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css" />
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/vertical-layout-light/style.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/css/external/mikha.css" />
  <link href="<?= base_url(); ?>/landing-page/img/open-book.png" rel="icon" />
  <!-- endinject -->
  <!-- Accordion -->

  <!-- CSS -->
  <link rel="stylesheet" href="<?php base_url() ?>/css/external/hover.css" />
</head>

<body>
  <div class="container-scroller">
    <!--
         Header Bang 
      -->
    <?= $this->include('templates/navbar'); ?>
    <?= $this->include('templates/sidebar'); ?>
    <?= $this->renderSection('page-content'); ?>
  </div>
  </div>

  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url(); ?>/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= base_url(); ?>/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/select2/select2.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url(); ?>/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/js/template.js"></script>
  <script src="<?= base_url(); ?>/js/settings.js"></script>
  <script src="<?= base_url(); ?>/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url(); ?>/js/dashboard.js"></script>
  <script src="<?= base_url(); ?>/js/Chart.roundedBarCharts.js"></script>
  <script src="<?= base_url(); ?>/js/file-upload.js"></script>
  <script src="<?= base_url(); ?>/js/typeahead.js"></script>
  <script src="<?= base_url(); ?>/js/select2.js"></script>
  <!-- End custom js for this page-->
  <!-- Code injected by live-server -->
</body>

</html>