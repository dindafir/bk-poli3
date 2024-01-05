<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="card-title">Tambah Jadwal Periksa</h5>
            </div>
        </div>
    </div>
        <?php
            include "../../../config/connection.php";

            $id = "";
            $nama_obat = "";
            $kemasan = "";
            $harga = "";
            
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM obat WHERE id = ?";
                $stmt = $connect->prepare($query);
                $stmt->bind_param("i", $id);
                $stmt->execute();
            
                $result = $stmt->get_result();
            
                while ($obat = $result->fetch_assoc()) {
                    $nama_obat = $obat['nama_obat'];
                    $kemasan = $obat['kemasan'];
                    $harga = $obat['harga'];
                }
            
                $stmt->close();
            }
        ?>
        <form action="<?= $id != "" ? "$BASE_ADMIN_CONTROLLERS/jadwal_periksa/update.php?id=$id" : "$BASE_ADMIN_CONTROLLERS/jadwal_periksa/create.php" ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama Dokter</label>
                    <select name="dokter" class="form-control">
                        <option value="">-Pilih Dokter-</option>
                        <?php 
                            include "../../../config/connection.php";

                            $query = "SELECT * FROM dokter";
                            $results = mysqli_query($connect, $query);

                            if ($results->num_rows === 0) {
                                echo "<option value=''>Tidak ada data</option>";
                            } else {
                                while ($dokter = mysqli_fetch_assoc($results)) {
                            ?>
                            <option value="<?= $dokter['id'] ?>"><?= $dokter['nama'] ?></option>
                            <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Hari</label>
                    <select name="hari" class="form-control">
                        <option value="">-Pilih Hari-</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jam Mulai</label>
                    <input type="time" class="form-control" name="jam_mulai" placeholder="Jam Mulai" value="<?= $jam_mulai ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jam Selesai</label>
                    <input type="time" class="form-control" name="jam_selesai" placeholder="Jam Selesai" value="<?= $jam_selesai ?>">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <input type="reset" class="btn btn-secondary" value="Cancel">
            </div>
        </form>
    </div>
</div>

<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="ms-panel">
        <div class="ms-panel-header">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="card-title">Data Jadwal Periksa</h5>
                </div>
            </div>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                <table id="basic-1" class="table table-striped thead-primary w-100">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama Dokter</th>
                            <th>Hari</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th width="10%"><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "../../../config/connection.php";

                            $no = 1;
                            $query = "SELECT 
                            d.nama as nama_dokter, 
                            p.id as id,
                            p.hari as hari,
                            p.jam_mulai as jam_mulai,
                            p.jam_selesai as jam_selesai
                            FROM jadwal_periksa p INNER JOIN dokter d ON p.id_dokter = d.id";
                            $results = mysqli_query($connect, $query);

                            if ($results->num_rows === 0) {
                                echo "<tr><td colspan='7' align='center'>Tidak ada data</td></tr>";
                            } else {
                                while ($jadwal = mysqli_fetch_assoc($results)) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $jadwal['nama_dokter'] ?></td>
                                <td><?= $jadwal['hari'] ?></td>
                                <td><?= $jadwal['jam_mulai'] ?></td>
                                <td><?= $jadwal['jam_selesai'] ?></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm delete-button"><i class="fa fa-trash"></i> Hapus</a>    
                                </td>
                            </tr>
                            <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </table>
    </div>
    </div>
</div>