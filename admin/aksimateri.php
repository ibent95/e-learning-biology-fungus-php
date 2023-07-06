<?php
    include_once("koneksi.php");

    if ($_GET['materi'] == 'form-input') {
        echo "
            <div class='col-md-12'>
                <h3>Form Input Matakuliah</h3>
                <form class='row' enctype='multipart/form-data' action='?page=aksimateri&materi=input' method='post'>

                        <div class='col-md-6 form-group'>
                            <label class='control-label'>Sub Judul</label>
                            <input name='sub_judul' class='form-control' placeholder='Nama Sub Judul Materi' />
                        </div>

                        <div class='col-md-12 form-group'>
                            <label class='control-label'>Deskripsi</label>
                            <textarea class='form-control' name='deskripsi' id='deskripsi' cols='30' rows='10' placeholder='Deskripsi Materi'></textarea>
                        </div>

                        <div class='col-md-12 form-group'>
                            <label class='control-label'>Gambar</label>
                            <input class='form-control' type='file' name='gambar' id='gambar' placeholder='Gambar'  accept='image/png, image/jpeg, image/jpg'>
                        </div>

                        <div class='col-md-2 form-group'>
                            <label class='control-label'>Status</label>

                            <select name='aktif' class='form-control'>
                                <option value='Y'>Aktif</option>
                                <option value='N'>Tidak Aktif</option>
                            </select>
                        </div>

                        <div class='col-md-12 form-group'>
                            <input class='btn btn-primary' name='submit' type='submit' value='Submit' />
                        </div>
                </form>
            </div>
        ";
    } elseif ($_GET['materi'] == 'input') {
        $query = mysqli_query($koneksi, "INSERT INTO `materi` (`sub_judul`, `deskripsi`, `gambar`, `aktif`) VALUES ('$_POST[sub_judul]', '$_POST[deskripsi]', '$_POST[gambar]', '$_POST[aktif]')");

        if ($query) {
            ?>
                <script language="javascript" type="text/javascript">document.location.href="?page=materi";</script>
            <?php
        } else {
            echo mysqli_error($koneksi);
        }
    } elseif ($_GET['materi'] == 'form-edit') {
        $id = $_GET['id_materi'];
        $edit = mysqli_query($koneksi, "SELECT * FROM `materi` WHERE `id_materi`='$id'");
        $z = mysqli_fetch_array($edit);

        echo "
            <div class='col-md-6'>
                <h3>Form Edit Materi</h3>

                <form class='row' enctype='multipart/form-data' action='?page=aksimateri&materi=update' method='post'>
                    <input type='hidden' name='id_materi' value='$z[id_materi]'/>

                    <div class='col-md-6 form-group'>
                        <input name='sub_judul' class='form-control' value='$z[sub_judul]' />
                    </div>

                    <div class='col-md-12 form-group'>
                        <label class='control-label'>Deskripsi</label>
                        <textarea class='form-control' name='deskripsi' id='deskripsi' cols='30' rows='10' placeholder='Deskripsi Materi'>$z[deskripsi]</textarea>
                    </div>

                    <div class='col-md-12 form-group'>
                        <label class='control-label'>Gambar</label>
                        <input class='form-control' type='file' name='gambar' id='gambar' placeholder='Gambar'  accept='image/png, image/jpeg, image/jpg' value='$z[gambar]'>
                    </div>

                    <div class='col-md-2 form-group'>
                        <label class='control-label'>Status</label>

                        <select name='aktif' class='form-control'>";
?>

                            <option value="Y"
                                <?php if ($z['aktif'] == "Y") { echo "selected='selected'"; } ?>>Y</option>
                            <option value="N"
                                <?php if ($z['aktif'] == "N") { echo "selected='selected'"; } ?>>N</option>
<?php

    echo "
                        </select>
                    </div>

                    <div class='col-md-12 form-group'>
                        <input class='btn btn-primary' name='submit' type='submit' value='Submit' />
                    </div>
                </form>
            </div>";
    } elseif ($_GET['materi'] == 'update') {
        $query = mysqli_query($koneksi, "UPDATE `materi` SET `sub_judul`='$_POST[sub_judul]', `deskripsi`='$_POST[deskripsi]', `gambar`='$_POST[gambar]', `aktif`='$_POST[aktif]' WHERE `id_materi`='$_POST[id_materi]'");

        if ($query) {
            ?>
                <script language="javascript" type="text/javascript">document.location.href="?page=materi";</script>
            <?php
        } else {
            echo mysqli_error($koneksi);
        }
    } elseif ($_GET['materi'] == 'hapus') {

        $query = mysqli_query($koneksi, "DELETE FROM `materi` WHERE `id_materi`='$_GET[id_materi]'");
        if ($query) {
            ?>
                <script language="javascript" type="text/javascript">document.location.href="?page=materi";</script>
            <?php
        } else {
            echo mysqli_error($koneksi);
        }

    }

?>