<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="card-title">Tambah Data Obat</h5>
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
        <form action="<?= $id != "" ? "$BASE_ADMIN_CONTROLLERS/obat/update.php?id=$id" : "$BASE_ADMIN_CONTROLLERS/obat/create.php" ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama Obat</label>
                    <input type="text" class="form-control" name="obat" placeholder="Nama Obat" value="<?= $nama_obat ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kemasan</label>
                    <input type="text" class="form-control" name="kemasan" placeholder="Kemasan" value="<?= $kemasan ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga" value="<?= $harga ?>">
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
                    <h5 class="card-title">Data Obat</h5>
                </div>
            </div>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                <table id="basic-1" class="table table-striped thead-primary w-100">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama Obat</th>
                            <th>Kemasan</th>
                            <th>Harga</th>
                            <th width="10%"><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "../../../config/connection.php";

                            $no = 1;
                            $query = "SELECT * FROM obat";
                            $results = mysqli_query($connect, $query);

                            while ($obat = mysqli_fetch_assoc($results)) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $obat['nama_obat'] ?></td>
                                <td><?= $obat['kemasan'] ?></td>
                                <td><?= $obat['harga'] ?></td>
                                <td>
                                <a class="btn btn-success rounded-pill px-3" href="<?= $BASE_ADMIN_PAGES."?page=obat&id=".$obat['id'] ?>">Edit</a>
                                <a class="btn btn-danger rounded-pill px-3" href="<?= $BASE_ADMIN_CONTROLLERS."/obat/delete.php?id=".$obat['id'] ?>">Hapus</a>
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