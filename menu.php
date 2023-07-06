<?php
session_start();
include "koneksi.php";
?>

<li>
	<a class="active-menu" href="index.php">
		<i class="fa fa-dashboard fa-2x fa-fw"></i>
		Beranda
	</a>
</li>

<?php
if (isset($_SESSION['id_user'])) {
	echo "
			<li>
				<a href='?page=nilai'>
					<i class='fa fa-table fa-2x fa-fw'></i>
					Nilai Saya
				</a>
			</li>
		";
} else {
	// echo "<li><a  href='?page=daftar'><i class='fa fa-bar-chart-o fa-2x'></i> Daftar</a>/li>";
}
?>

</a></li>

<li>
	<a href="?page=materi">
		<i class="fa fa-book fa-2x fa-fw"></i>
		Materi
	</a>
</li>

<li>
	<a href="?page=datahasil">
		<i class="fa fa-sitemap fa-2x fa-fw"></i>
		Hasil Tes
	</a>
</li>

<li>
	<a href="#">
		<i class="fa fa-edit fa-2x fa-fw"></i>
		Tes
		<i class="fa arrow fa-2x fa-fw"></i>
	</a>

	<ul class="nav nav-second-level">
		<?php
		$best = mysqli_query($koneksi, "SELECT * FROM kategori WHERE aktif='Y' ORDER BY id_kategori DESC");

		while ($a = mysqli_fetch_array($best)) {
			echo "
					<li>
						<a href='?page=detail&id=$a[id_kategori]'>
							$a[nama_kategori]
						</a>
					</li>
				";
		}
		?>
	</ul>
</li>