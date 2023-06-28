<h2><strong>Hasil Ujian Siswa</strong></h2>
<div class="alert alert-info alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	Berikut adalah hasil ujian online anda, silahkan cari nama anda untuk melihat anda lulus seleksi atau tidak.

	<h4>Keterangan</h4>

	<a href="#" class="btn btn-danger btn-lg">RM : Remedial</a>
	<a href="#" class="btn btn-success btn-lg">OK</a>
</div>

<div class="panel panel-default">
	<div class="panel-heading">Advanced Tables</div>

	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal Ujian</th>
						<th>Nama</th>
						<th>NISN</th>
						<th>Asal Sekolah</th>
						<th>Alamat</th>
						<th>Skor</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include "koneksi.php";

						$tampil = mysqli_query($koneksi, "select * from tabel_nilai, tabel_user where tabel_nilai.id_user = tabel_user.id_user");

						$no = 1;
						while ($k = mysqli_fetch_array($tampil)) {
							$tanggal = strtoupper($k['tanggal']);
							$nama_user = strtoupper($k['nama_user']);
							$nisn = strtoupper($k['nisn']);
							$asalsekolah = strtoupper($k['asalsekolah']);
							$alamat = strtoupper($k['alamat']);
							$point = strtoupper($k['point']);

							echo "<tr class=gradeX>";
							echo "<td>$no</td>";
							echo "<td>$tanggal</td>";
							echo "<td>$nama_user</td>";
							echo "<td>$nisn</td>";
							echo "<td>$asalsekolah</td>";
							echo "<td>$alamat</td>";
							echo "<td>$point</td>";
						?>
							<td>
								<?php if ($k['point'] > 5) : ?>
									<span class='btn btn-success btn-lg'>OK</span>
								<?php else : ?>
									<span class='btn btn-danger btn-lg'>RM</span>
								<?php endif ?>
								</span>
							</td>
						<?php
							echo "</tr>";
							$no++;
						}
						?>
				</tbody>
			</table>
		</div>
	</div>
</div>