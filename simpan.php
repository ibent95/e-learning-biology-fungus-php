<div>
	<?php if (isset($_SESSION['id_user'])) { ?>

		<?php if (isset($_POST['submit'])) {

			$id_user = $_POST['id_user'];
			$kategori = $_POST['kategori'];
			$benar = $_POST['benar'];
			$salah = $_POST['salah'];
			$kosong = $_POST['kosong'];
			$point = $_POST['point'];
			$tanggal = date("Y-m-d");

			$query = mysqli_query($koneksi, "INSERT INTO `tabel_nilai` (id_user, id_kategori, benar, salah, kosong, `point`, tanggal) values('$id_user','$kategori','$benar','$salah','$kosong','$point','$tanggal')");

			if ($query) {
		?>
			<script language="javascript">
				document.location.href = '?page=nilai'
			</script>
			<?php
					} else {
						echo mysqli_error($koneksi);
					}
				}
			?>

	<?php } else { ?>

		<p>Anda belum login. silahkan <a href="index.php">Login</a></p>

	<?php } ?>
</div>