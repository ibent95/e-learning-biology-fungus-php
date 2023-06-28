<?php
if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
?>

    <h2><strong>Score Hasil Ujian</strong></h2>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Dibawah ini adalah hasil ujian untuk siswa yang bernama, <a href="#" class="alert-link"><?php echo ucwords($_SESSION['username']); ?></a>.
    </div>


    <div class="col-md-13">
        <!--    Hover Rows  -->
        <div class='panel panel-default'>
            <div class='panel-heading'>
                Result score
            </div>
            <div class='panel-body'>
                <div class='table-responsive'>
                    <table class='table table-hover'>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Matakuliah</th>
                                <th>Tanggal</th>
                                <th>Benar</th>
                                <th>Salah</th>
                                <th>Kosong</th>
                                <th>Skor</th>
                                <th>Keterangan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 0;
                                $query = mysqli_query($koneksi, "SELECT * FROM `tabel_nilai` WHERE `id_user`='$id_user'");

                                while ($row = mysqli_fetch_array($query)) {
                                    $z = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM `kategori` WHERE `id_kategori` ='$row[id_kategori]'"));
                                ?>
                            <tr>
                                <td><span class="btn btn-default btn-lg"><?php echo $no = $no + 1; ?></span></td>
                                <td><span class="btn btn-default btn-lg"><?php echo $z['nama_kategori']; ?></span></td>
                                <td><span class="btn btn-default btn-lg"><?php echo $row['tanggal']; ?></span></td>
                                <td><span class="btn btn-default btn-lg"><?php echo $row['benar']; ?></a></span></td>
                                <td><span class="btn btn-default btn-lg"><?php echo $row['salah']; ?></span></td>
                                <td><span class="btn btn-default btn-lg"><?php echo $row['kosong']; ?></span></td>
                                <td><span class="btn btn-default btn-lg"><?php echo $row['point']; ?></span></td>
                                <td><?php if ($row['point'] > 5) {
                                        echo "<span class='btn btn-success btn-lg'>Lulus</span>";
                                    } else {
                                        echo "<span class='btn btn-danger btn-lg'>Tidak Lulus</span>";
                                    } ?></td>

                            </tr>
                        <?php
                                }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Hover Rows  -->


    </div>
    <!-- /. ROW  -->

<?php } else { ?>

<p>Anda belum login. silahkan <a href="index.php">Login</a></p>

<?php } ?>

</div>