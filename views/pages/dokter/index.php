<?php 
    session_start();
    include_once '../../../config/base_url.php';

    if ($_SESSION['role'] !== 'dokter') {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Poliklinik | Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/css/slick.css" rel="stylesheet">
  <!-- medjestic styles -->
  <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/css/style.css" rel="stylesheet">

  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/css/datatables.css">

  <!-- Page Specific CSS (Morris Charts.css) -->
  <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/css/morris.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/img/logo_udinus1.jpeg">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <?php include "../../layouts/sidebar.php"; ?>
    <!-- Sidebar Right -->
  
    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        <?php include "../../layouts/header.php"; ?>
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] === 'dashboard') {
                        include_once ('./dashboard/index.php');
                    } else if ($_GET['page'] === 'riwayat_pasien') {
                        include_once ('./riwayat_pasien/index.php');
                    } else if ($_GET['page'] === 'memeriksa_pasien') {
                        include_once ('./memeriksa_pasien/index.php');
                    } else if ($_GET['page'] === 'periksa') {
                        include_once ('./memeriksa_pasien/periksa.php');
                    } else if ($_GET['page'] === 'edit_periksa') {
                        include_once ('./memeriksa_pasien/edit.php');
                    } else if ($_GET['page'] === 'jadwal_periksa') {
                        include_once ('./jadwal_periksa/index.php');
                    }
                } else {
                    include_once ('./dashboard/index.php');
                }
            ?>
        </div>
    </main>

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/jquery-3.3.1.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/popper.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/bootstrap.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/perfect-scrollbar.js"> </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/jquery-ui.min.js"> </script>

    <!-- Global Required Scripts End -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/d3.v3.min.js"> </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/topojson.v1.min.js"> </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datamaps.all.min.js"> </script>


    <!-- Page Specific Scripts Start -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/slick.min.js"> </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/moment.js"> </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/jquery.webticker.min.js"> </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/Chart.bundle.min.js"> </script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/index-chart.js"> </script>
    <!-- Required datatable js -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatable-extension/jszip.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/jsdatatable/datatable-extension/buttons.html5.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/jsdatatable/datatable-extension/buttons.print.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/jsdatatable/datatable-extension/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/jsdatatable/datatable-extension/dataTables.responsive.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/jsdatatable/datatable-extension/responsive.bootstrap4.min.js"></script>

    <!-- Page Specific Scripts Finish -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/calendar.js"></script>
    <!-- medjestic core JavaScript -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/framework.js"></script>
    <!-- Settings -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/settings.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST']?>/bk_poli_baru/public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST']?>/bk_poli_baru/public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
