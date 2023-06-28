<div>
	<?php if (isset($_SESSION['id_user'])) { ?>
		<div class="panel panel-back noti-box">
			<span class="icon-box bg-color-blue">
				<i class="fa fa-warning"></i>
			</span>
			<div class="text-box">
				<p class="main-text">Hasil Jawaban <?php echo ucwords($_SESSION['username']); ?></p>
				<p class="text-muted">Klik simpan untuk menyimpan data</p>

			<?php

				$pilihan 	= $_POST["pilihan"];
				$id_soal 	= $_POST["id"];
				$jumlah 	= $_POST['jumlah'];
				$kategori 	= $_POST['kategori'];

				$score 		= 0;
				$benar 		= 0;
				$salah 		= 0;
				$kosong 	= 0;
				$salkos 	= $salah + $kosong;

				for ($i = 0; $i < $jumlah; $i++) {
					//id nomor soal
					$nomor = $id_soal[$i];

					//jika user tidak memilih jawaban
					if (empty($pilihan[$nomor])) {
						$kosong++;
					} else {
						//jawaban dari user
						$jawaban = $pilihan[$nomor];

						//cocokan jawaban user dengan jawaban di database
						$query = mysqli_query($koneksi, "SELECT * FROM `tabel_soal` WHERE `id_soal`='$nomor' AND `jawaban`='$jawaban'");

						$cek = mysqli_num_rows($query);

						if ($cek) {
							//jika jawaban cocok (benar)
							$benar++;
						} else {
							//jika salah
							$salah++;
						}
					}
					$score = (($benar * 10) - ($salah + $kosong)) / $jumlah;
				}
				$z = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM `kategori` WHERE `id_kategori` ='$kategori'"));

			?>

				<form action="?page=simpan" method="post">
					<table class="text-muted" width="100%" border="0">
						<p class="text-muted">Matakuliah: <?php echo "$z[nama_kategori]"; ?> </p>
						<tr>
							<td width="12%"><span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>Benar</span></td>
							<td width="88%"> = <span class="btn btn-success btn-lg"><?php echo $benar; ?></span> soal x 5 point</td>
						</tr>
						<tr>
							<td><span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>Salah</span></td>
							<td> = <span class="btn btn-danger btn-lg"><?php echo $salah; ?></span> soal </td>
						</tr>
						<tr>
							<td><span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>Kosong</span></td>
							<td> = <span class="btn btn-warning btn-lg"><?php echo $kosong; ?></span> soal </td>
						</tr>
						<tr>
							<td><span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i><b>Score</b></span></td>
							<td>= <span class="btn btn-primary btn-lg"><b><?php echo $score; ?></b></span> Point</td>
						</tr>
					</table>
					<input type="hidden" name="kategori" value="<?php echo $kategori; ?>" />
					<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>" />
					<input type="hidden" name="benar" value="<?php echo $benar; ?>" />
					<input type="hidden" name="salah" value="<?php echo $salah; ?>" />
					<input type="hidden" name="kosong" value="<?php echo $kosong; ?>" />
					<input type="hidden" name="point" value="<?php echo $score; ?>" />
					<p></p>
					<input class="btn btn-success btn-lg" type="submit" name="submit" value="Simpan Nilai" onclick="return confirm('Apakah Anda yakin akan menyimpan nilai ujian?')" />

				</form>

			</div>
		</div>

	<?php } else { ?>

	<p>Anda belum login. silahkan <a href="index.php">Login</a></p>

	<?php } ?>
</div>