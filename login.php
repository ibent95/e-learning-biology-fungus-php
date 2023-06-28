<div>
	<?php
		session_start();

		if (isset($_POST['username'])) {
			$username = htmlentities($_POST['username']);
			$password = md5($_POST['password']);

			if (empty($username) || empty($password)) { ?>

				<p>Username atau Password anda masih kosong. silahkan ulangi <a href="?page=daftar">Login</a></p>

			<?php } else {

				$query = mysqli_query($koneksi, "SELECT * FROM `tabel_user` WHERE `username`='$username' and `password`='$password'");
				$cek = mysqli_num_rows($query);
				$data = mysqli_fetch_array($query);

				if ($cek) {
					$_SESSION['username'] = $username;
					$_SESSION['id_user'] = $data['id_user'];
					$_SESSION['gambar_user'] = $data['gambar_user']; ?>

					<script language="javascript">
						document.location.href = 'index.php'
					</script>
				<?php } else { ?>
					<div class='panel panel-back noti-box'>
						<span class='icon-box bg-color-red set-icon'><i class='fa fa-warning'></i></span>
						<div class='text-box'>
							<p class='main-text'>Gagal login. </p>
							<p class='text-muted'><a href="?page=daftar">Silahkan Login kembali</a>. </p>
						</div>
					</div>
					<?php echo mysqli_error($koneksi);
				}
			}
		} else {
			unset($_POST['username']);
		}
	?>
</div>