<div>
    <?php
        if (isset($_SESSION['id_admin'])) {
            include_once 'koneksi.php';

            $id = $_GET['id'];

            $query = mysqli_query($koneksi, "DELETE FROM `tabel_soal` WHERE `id_soal`='$id'");

            if ($query) {
                ?><script language="javascript" type="text/javascript">document.location.href="?page=view"</script><?php
            } else {
                echo mysqli_error($koneksi);
            }
        } else {
            ?>
                <p>
                    Anda belum login. silahkan <a href="index.php">Login</a>
                </p>
            <?php
        }
    ?>
</div>
