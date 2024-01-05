<?php 
    include "../../../config/connection.php";

    if (isset($_GET['id_daftar_poli']) && $_GET['id_daftar_poli'] != null) {
        // Get Data Pasien
        $id = $_GET['id_daftar_poli'];
        $query = "SELECT
        pasien.id AS id_pasien,
        pasien.nama AS nama_pasien
        FROM pasien INNER JOIN daftar_poli ON daftar_poli.id_pasien = pasien.id
        WHERE daftar_poli.id = $id
        ";
        $result = mysqli_query($connect, $query);
        $data = mysqli_fetch_assoc($result);
    } else {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/bk-poliklinik/views/pages/dokter?page=memeriksa_pasien');
    }
?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="card-title">Halaman Periksa Pasien</h5>
            </div>
        </div>
    </div>
        <form action="<?= $BASE_DOKTER_CONTROLLERS. '/periksa/create.php' ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <input type="hidden" name="id_daftar_poli" class="form-control" value="<?= $id ?>">
                <div class="mb-3">
                    <label class="form-label">Nama Pasien</label>
                    <input type="text" readonly class="form-control" name="nama" value="<?= $data['nama_pasien'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Periksa</label>
                    <input type="datetime-local" class="form-control" name="tanggal_periksa">
                </div>
                <div class="mb-3">
                    <label class="form-label">Catatan</label>
                    <textarea name="catatan" id="catatan" cols="30" rows="4" placeholder="Masukkan catatan pemeriksaan" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Obat</label>
                    <select name="obat[]" id="obat" class="form-control" multiple>
                        <option value="">-Pilih Obat-</option>
                        <?php
                            include "../../../config/connection.php";

                            $query_obat = "SELECT * FROM obat";
                            $db_obat = mysqli_query($connect, $query_obat);

                            while ($obat = mysqli_fetch_assoc($db_obat)) {
                        ?>
                        <option value="<?= $obat['id'] ?>"><?= $obat['nama_obat'] ?> - <?= $obat['harga'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-save"></i> Simpan</button>
                <input type="reset" class="btn btn-secondary" value="Cancel">
            </div>
        </form>
    </div>
</div>
