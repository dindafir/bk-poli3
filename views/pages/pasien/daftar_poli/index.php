<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="card-title">Halaman Periksa Pasien</h5>
            </div>
        </div>
    </div>
        <form action="<?= $BASE_PASIEN_CONTROLLERS . '/daftar_poli/create.php' ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <input type="hidden" name="id_daftar_poli" class="form-control" value="<?= $id ?>">
                <div class="mb-3">
                    <label class="form-label">Nomor Rekam Medis</label>
                    <input type="text" readonly class="form-control" name="no_rm" value="<?= $_SESSION['no_rm'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Poli</label>
                    <select name="poli" class="form-control">
                        <option value="">-Pilih Poli-</option>
                        <?php 
                            include "../../../config/connection.php";

                            $query = "SELECT * FROM poli";
                            $results = mysqli_query($connect, $query);

                            while ($poli = mysqli_fetch_assoc($results)) {
                                echo "<option value='" . $poli['id'] . "'>" . $poli['nama_poli'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jadwal</label>
                    <select name="jadwal" class="form-control">
                        <option value="">-Pilih Jadwal-</option>
                        <?php 
                            include "../../../config/connection.php";

                            $query = "SELECT * FROM jadwal_periksa";
                            $results = mysqli_query($connect, $query);

                            while ($jadwal = mysqli_fetch_assoc($results)) {
                                echo "<option value='" . $jadwal['id'] . "'>" . $jadwal['hari'] . " (" . $jadwal['jam_mulai'] . " - " . $jadwal['jam_selesai'] . ")</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keluhan</label>
                    <textarea name="keluhan" id="keluhan" cols="30" rows="4" placeholder="Masukkan keluhan anda" class="form-control"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <input type="reset" class="btn btn-secondary" value="Cancel">
            </div>
        </form>
    </div>
</div>
