<nav class="navbar ms-navbar">
  <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
    <span class="ms-toggler-bar bg-white"></span>
    <span class="ms-toggler-bar bg-white"></span>
    <span class="ms-toggler-bar bg-white"></span>
  </div>
  <div class="logo-sn logo-sm ms-d-block-sm">
    <?php 
      if ($_SESSION['role'] === 'admin'){
        echo '
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="'.$BASE_ADMIN_PAGES.' ?page=dashboard"><img src="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/public/assets/img/logo.jpg" alt="logo" style="width:40%;height:40%;"> </a>
          ';
      }
      else if($_SESSION['role'] === 'dokter') {
        echo '
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="'.$BASE_DOKTER_PAGES.' ?page=dashboard"><img src="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/public/assets/img/logo.jpg" alt="logo" style="width:40%;height:40%;"> </a>
          ';
      }
      else if($_SESSION['role'] === 'pasien') {
        echo '
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="'.$BASE_PASIEN_PAGES.' ?page=dashboard"><img src="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/public/assets/img/logo.jpg" alt="logo" style="width:40%;height:40%;"> </a>
          ';
      }
    ?>
  </div>
  <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

        <li class="ms-nav-item ms-nav-user dropdown">
        <?php 
          if ($_SESSION['role'] === 'admin'){
            echo '
            <a href="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/controllers/admin/logout.php"> <img src="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/public/assets/img/logout.png" width="30px"> </a>
              ';
          }
          else if($_SESSION['role'] === 'dokter') {
            echo '
            <a href="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/controllers/admin/logout.php"> <img src="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/public/assets/img/logout.png" width="30px"> </a>
              ';
          }
          else if($_SESSION['role'] === 'pasien') {
            echo '
            <a href="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/controllers/admin/logout.php"> <img src="http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/public/assets/img/logout.png" width="30px"> </a>
              ';
          }
        ?>
        </li>
  </ul>
  <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
    <span class="ms-toggler-bar bg-white"></span>
    <span class="ms-toggler-bar bg-white"></span>
    <span class="ms-toggler-bar bg-white"></span>
  </div>
</nav>