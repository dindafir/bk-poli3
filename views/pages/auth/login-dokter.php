<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/prebuilt-pages/default-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 21:01:20 GMT -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Poliklinik | Login Dokter</title>
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
      <!-- Medjestic styles -->
      <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/css/style.css" rel="stylesheet">
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/img/logo_udinus1.jpeg">
   </head>
   <body class="ms-body ms-primary-theme ms-logged-out">
      
      <!-- Main Content -->
      <main class="body-content">
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper ms-auth">
            
            <div class="ms-auth-container">
                <?php
                    if (isset($_SESSION['error'])) {
                        echo "<p class='text-danger mt-1 mb-3'>" . $_SESSION['error'] . "</p>";
                        unset($_SESSION['error']);
                    }
                ?>
                <div class="ms-auth-col">
                    <div class="ms-auth-form">
                        <form class="needs-validation" action="" method="POST">
                            <h1>Login to Account</h1>
                            <p>Please enter your Nama and Password to continue</p>
                            <div class="mb-3">
                                <label for="validationCustom08">Nama</label>
                                <div class="input-group">
                                    <input type="text" name="nama" class="form-control" id="validationCustom08" placeholder="Nama" required="" value="Adi">
                                    <div class="invalid-feedback">
                                        Please provide a valid Nama.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="validationCustom09">Alamat</label>
                                <div class="input-group">
                                    <input type="text" name="alamat" class="form-control" id="validationCustom09" placeholder="Alamat" required="" value="Semarang">
                                    <div class="invalid-feedback">
                                        Please provide a Alamat.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
                            </div>
                        </form>
                        <?php 
                            include '../../../controllers/dokter/auth.php';
                            login();
                        ?>
                    </div>
                </div>
            </div>
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
      <!-- Medjestic core JavaScript -->
      <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/framework.js"></script>
      <!-- Settings -->
      <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/js/settings.js"></script>
   </body>

<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/prebuilt-pages/default-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 21:01:23 GMT -->
</html>
