<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="card-title">Halaman Periksa Pasien</h5>
            </div>
        </div>
    </div>
    <?php 
        include "../../../config/connection.php";

        if (isset($_GET['id_daftar_poli']) && $_GET['id_daftar_poli'] != null) {
            // Get Data Pasien
            $id = $_GET['id_daftar_poli'];
            $query = "SELECT
            periksa.id AS id_periksa,
            periksa.tgl_periksa AS tanggal_periksa,
            periksa.catatan AS catatan,
            pasien.id AS id_pasien,
            pasien.nama AS nama_pasien
            FROM daftar_poli
            INNER JOIN pasien ON pasien.id = daftar_poli.id_pasien
            INNER JOIN periksa ON periksa.id_daftar_poli = $id
            WHERE daftar_poli.id = $id
            ";
            $result = mysqli_query($connect, $query);
            $data = mysqli_fetch_assoc($result);
        } else {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/views/pages/dokter?page=memeriksa_pasien');
        }
    ?>
        <form action="<?= $id != "" ? "$BASE_DOKTER_CONTROLLERS/periksa/update.php?id=$id" : null ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="mb-3">
                <input type="hidden" name="id_daftar_poli" class="form-control" value="<?= $id ?>">
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
                            
                            $id_periksa = $data['id_periksa'];
                            $query_detail_obat = "SELECT id_obat FROM detail_periksa WHERE id_periksa = $id_periksa";
                            $db_detail_obat = mysqli_query($connect, $query_detail_obat);

                            $selected_obats = array();

                            while ($row = mysqli_fetch_assoc($db_detail_obat)) {
                                $selected_obats[] = $row['id_obat'];
                            }

                            $query_obat = "SELECT * FROM obat";
                            $db_obat = mysqli_query($connect, $query_obat);

                            while ($obat = mysqli_fetch_assoc($db_obat)) {
                                $obat_id = $obat['id'];
                                $obat_nama = $obat['nama_obat'];
                                $obat_harga = $obat['harga'];
                                $is_selected = in_array($obat_id, $selected_obats);
                                $selected_attribute = $is_selected ? 'selected' : '';
                            ?>

                            <option value="<?= $obat_id ?>" <?= $selected_attribute ?>>
                                <?= $obat_nama ?> - <?= $obat_harga ?>
                            </option>

                            <?php
                                }
                        ?>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="submit">
                    <i class="fas fa-save"></i>
                        Simpan
                </button>
                <input type="reset" class="btn btn-secondary" value="Cancel">
            </div>
        </form>
    </div>
</div>
