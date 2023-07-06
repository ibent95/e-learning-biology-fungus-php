<div>
<?php
    // periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
    if (isset($_POST['submit'])) {
        include "koneksi.php";

        function antiinjection($data)
        {
            $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
            return $filter_sql;
        }

        $nisn           = $_POST['nisn'];
        $asalsekolah    = $_POST['asalsekolah'];
        $alamat         = $_POST['alamat'];
        $nama           = ucwords($_POST['nama']);
        $username       = $_POST['username'];
        $password       = md5($_POST['password']);

        // periksa jika data yang dimasukan belum lengkap
        if ($username == "" || $password == "" || $nisn == "" || $asalsekolah == "" || $alamat == "" || $nama == "") {
            // jika ada inputan yang kosong
            echo "
                <div class='panel panel-back noti-box'>
                    <span class='icon-box bg-color-red set-icon'>
                        <i class='fa fa-warning'></i>
                    </span>
                    <div class='text-box' >
                        <p class='main-text'>Gagal simpan data</p>
                        <p class='text-muted'>Data yang anda masukkan belum lengkap. </p>
                    </div>
                </div>
            ";
        } else {

            // definisikan variabel file dan alamat file
            $alamatfile = "./gambar/user_online.jpg";

            // catat data file yang berhasil di upload
            $upload = mysqli_query($koneksi, "INSERT INTO `tabel_user` (`nama_user`, `gambar_user`, `username`, `password`, `nisn`, `asalsekolah`, `alamat`) VALUES ('$nama','$alamatfile','$username','$password','$nisn','$asalsekolah','$alamat')");

            if ($upload) {
                // jika berhasil
                echo "<p><div class='panel panel-back noti-box'>
                    <span class='icon-box bg-color-green set-icon'>
                        <i class='fa fa-desktop'></i>
                    </span>
                    <div class='text-box' >
                        <p class='main-text'>Data Anda berhasil disimpan. </p>
                        <p class='text-muted'>Please Login to app to start examination</p>
                    </div></div></p>";
            } else {
                echo "<div class='panel panel-back noti-box'>
                    <span class='icon-box bg-color-blue'>
                        <i class='fa fa-warning'></i>
                    </span>
                    <div class='text-box' >
                        <p class='main-text'>Gagal simpan data</p>
                        <p class='text-muted'>Please fix these issues to work smooth</p>

                    </div></div>";
            }
        }
    } else {
        unset($_POST['submit']);
    }
?>
</div>