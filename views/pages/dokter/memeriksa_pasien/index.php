<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="ms-panel">
        <div class="ms-panel-header">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="card-title">Halaman Daftar Periksa</h5>
                </div>
            </div>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                <table id="basic-1" class="table table-striped thead-primary w-100">
                    <thead>
                        <tr>
                            <th width="5%">No Urut</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th width="10%"><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "../../../config/connection.php";

                            $query = "SELECT
                                        daftar_poli.id AS id_daftar_poli,
                                        periksa.id AS id_periksa,
                                        pasien.id AS id_pasien,
                                        periksa.catatan AS catatan,
                                        daftar_poli.no_antrian AS no_antrian,
                                        pasien.nama AS nama_pasien,
                                        daftar_poli.keluhan AS keluhan,
                                        daftar_poli.status_periksa AS status_periksa
                                        FROM pasien 
                                        INNER JOIN daftar_poli ON pasien.id = daftar_poli.id_pasien
                                        LEFT JOIN periksa ON daftar_poli.id = periksa.id_daftar_poli";
                            $results = mysqli_query($connect, $query);

                            while ($periksa = mysqli_fetch_assoc($results)) {
                            ?>
                                <tr>
                                    <td><?= $periksa['no_antrian'] ?></td>
                                    <td><?= $periksa['nama_pasien'] ?></td>
                                    <td><?= $periksa['keluhan'] ?></td>
                                    <td>
                                        <?php 
                                            if ($periksa['status_periksa'] == 0) {
                                                echo '
                                                    <a href="'.$BASE_DOKTER_PAGES.'?page=periksa&id_daftar_poli='.$periksa['id_daftar_poli'].'" class="btn btn-primary">
                                                        <i class="fas fa-stethoscope"></i>
                                                            Periksa
                                                    </a>
                                                ';
                                            } else {
                                                echo '
                                                <a href="'.$BASE_DOKTER_PAGES.'?page=edit_periksa&id_daftar_poli='.$periksa['id_daftar_poli'].'" class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>
                                                ';
                                            }                                            
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </table>
    </div>
    </div>
</div>