<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="ms-panel">
        <div class="ms-panel-header">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="card-title">Halaman Riwayat Pasien</h5>
                </div>
            </div>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                <table id="basic-1" class="table table-striped thead-primary w-100">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama Pasien</th>
                            <th>Alamat</th>
                            <th>No. KTP</th>
                            <th>No. Telepon</th>
                            <th>No. RM</th>
                            <th width="10%"><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "../../../config/connection.php";

                            $no = 1;
                            $query = "SELECT * FROM pasien";
                            $results = $connect->query($query);

                            if ($results->num_rows == 0) {
                                echo "<tr><td colspan='7' align='center'>Tidak ada data</td></tr>";
                            } else {
                                while ($d = $results->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['alamat']; ?></td>
                                        <td><?= $d['no_ktp']; ?></td>
                                        <td><?= $d['no_hp']; ?></td>
                                        <td><?= $d['no_rm']; ?></td>
                                        <td>
                                            <button data-toggle="modal" data-target="#detailModal<?= $d['id'] ?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i> Detail Riwayat Periksa
                                            </button>
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

<?php
    $results->data_seek(0);
    while ($d = $results->fetch_assoc()) {
        $no_detail = 1;
        $pasien_id = $d['id'];
        $data2 = $connect->query("SELECT 
                p.nama AS 'nama_pasien',
                pr.*,
                d.nama AS 'nama_dokter',
                dpo.keluhan AS 'keluhan',
                GROUP_CONCAT(o.nama_obat SEPARATOR ', ') AS 'obat'
                FROM periksa pr
                LEFT JOIN daftar_poli dpo ON (pr.id_daftar_poli = dpo.id)
                LEFT JOIN jadwal_periksa jp ON (dpo.id_jadwal = jp.id)
                LEFT JOIN dokter d ON (jp.id_dokter = d.id)
                LEFT JOIN pasien p ON (dpo.id_pasien = p.id)
                LEFT JOIN detail_periksa dp ON (pr.id = dp.id_periksa)
                LEFT JOIN obat o ON (dp.id_obat = o.id)
                WHERE dpo.id_pasien = '$pasien_id'
                GROUP BY pr.id
                ORDER BY pr.tgl_periksa DESC;");
?>
<div class="modal fade" id="detailModal<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Riwayat <?= $d['nama'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if ($data2->num_rows == 0) : ?>
                    <p class="my-2 text-danger">Tidak Ditemukan Riwayat Periksa</p>
                <?php else : ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal Periksa</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Keluhan</th>
                                <th scope="col">Catatan</th>
                                <th scope="col">Obat</th>
                                <th scope="col">Total Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($da = $data2->fetch_assoc()) : ?>
                                <tr>
                                    <td><?= $no_detail++; ?></td>
                                    <td><?= $da['tgl_periksa']; ?></td>
                                    <td><?= $da['nama_pasien']; ?></td>
                                    <td><?= $da['nama_dokter']; ?></td>
                                    <td><?= $da['keluhan']; ?></td>
                                    <td><?= $da['catatan']; ?></td>
                                    <td><?= $da['obat']; ?></td>
                                    <td><?= $da['biaya_periksa']; ?></td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                <?php endif ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>