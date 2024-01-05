<div class="row">
    
    <div class="col-xl-3 col-md-6 col-sm-6">
      <a href="#">
        <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
          <div class="ms-card-body media">
            <div class="media-body">
              <h6>Total Obat</h6>
                <?php 
                    include "../../../config/connection.php";

                    $query = "SELECT COUNT(*) AS total_obat FROM obat";
                    $result = $connect->query($query);
                    $pasien = $result->fetch_assoc();
                ?>
              <p class="ms-card-change"> <?= $pasien['total_obat']  ?> </p>
            </div>
          </div>
          <i class="fas fa-stethoscope ms-icon-mr"></i>
        </div>
      </a>
    </div>

</div>