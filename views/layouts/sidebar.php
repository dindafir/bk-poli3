<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
  <!-- Logo -->
  <div class="logo-sn ms-d-block-lg">
    <?php 
      if ($_SESSION['role'] === 'admin'){
        echo '
          <a class="pl-0 ml-0 text-center" href="'.$BASE_ADMIN_PAGES.'?page=dashboard"> <h4 style="color:white">Poliklinik</h4> </a>
          ';
      }
      else if($_SESSION['role'] === 'dokter') {
        echo '
          <a class="pl-0 ml-0 text-center" href="'.$BASE_DOKTER_PAGES.'?page=dashboard"> <h4 style="color:white">Poliklinik</h4> </a>
          ';
      }
      else if($_SESSION['role'] === 'pasien') {
        echo '
          <a class="pl-0 ml-0 text-center" href="'.$BASE_PASIEN_PAGES.'?page=dashboard"> <h4 style="color:white">Poliklinik</h4> </a>
          ';
      }
    ?>
    
    <a href="#" class="text-center ms-logo-img-link">
        <img class="img-profile rounded-circle avatar" src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/img/logo_udinus1.jpeg" alt="logo">
      <!-- <img src="{{ url('') }}/assets/img/logo.jpg" alt="logo"> -->
    </a>
    <h5 class="text-center text-white mt-2"><?= $_SESSION['name'] ?></h5>
    <?php if ($_SESSION['role'] === 'admin'): ?>
      <h6 class="text-center text-white mb-3">Admin</h6>
    <?php elseif ($_SESSION['role'] === 'dokter'): ?>
      <h6 class="text-center text-white mb-3">Dokter</h6>
    <?php elseif ($_SESSION['role'] === 'pasien'): ?>
      <h6 class="text-center text-white mb-3">Pasien</h6>
    <?php endif;?>
  </div>
  <!-- Navigation -->
  <?php 
      if ($_SESSION['role'] === 'admin'){
        echo '
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            <span style="color: #ffff">General</span>
          </div>
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="'.$BASE_ADMIN_PAGES.'?page=dashboard">
              <span><i class="fas fa-home"></i>Home</span>
            </a>
          </li>
          <!-- /Dashboard -->
    
          <!-- Obat -->
          <li class="menu-item">
            <a href="'.$BASE_ADMIN_PAGES.'?page=obat">
              <span><i class="fas fa-home"></i>Obat</span>
            </a>
          </li>
          <!-- /Obat -->
        </ul>
          ';
      }
      else if($_SESSION['role'] === 'dokter') {
        echo '
          <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
              <span style="color: #ffff">General</span>
            </div>
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="'.$BASE_DOKTER_PAGES.'?page=dashboard">
                <span><i class="fas fa-home"></i>Home</span>
              </a>
            </li>
            <!-- /Dashboard -->
      
            <!-- jadwal memeriksa -->
            <li class="menu-item">
              <a href="'.$BASE_DOKTER_PAGES.'?page=jadwal_periksa">
                <span><i class="fas fa-home"></i>Jadwal Memeriksa</span>
              </a>
            </li>
            <!-- /jadwal memeriksa -->

            <!-- jadwal memeriksa -->
            <li class="menu-item">
              <a href="'.$BASE_DOKTER_PAGES.'?page=memeriksa_pasien">
                <span><i class="fas fa-home"></i>Memeriksa Pasien</span>
              </a>
            </li>
            <!-- /jadwal memeriksa -->

            <!-- jadwal memeriksa -->
            <li class="menu-item">
              <a href="'.$BASE_DOKTER_PAGES.'?page=riwayat_pasien">
                <span><i class="fas fa-home"></i>Riwayat Pasien</span>
              </a>
            </li>
            <!-- /jadwal memeriksa -->
          </ul>
          ';
      }
      else if($_SESSION['role'] === 'pasien') {
        echo '
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Heading -->
          <div class="sidebar-heading">
            <span style="color: #ffff">General</span>
          </div>
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="'.$BASE_PASIEN_PAGES.'?page=dashboard">
              <span><i class="fas fa-home"></i>Home</span>
            </a>
          </li>
          <!-- /Dashboard -->
    
          <!-- Obat -->
          <li class="menu-item">
            <a href="'.$BASE_PASIEN_PAGES.'?page=daftar_poli">
              <span><i class="fas fa-home"></i>Daftar Poli</span>
            </a>
          </li>
          <!-- /Obat -->
        </ul>
          ';
      }
    ?>
</aside>
