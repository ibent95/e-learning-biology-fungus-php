
<a href="?page=aksimateri&materi=form-input" class="btn btn-success btn-lg">Tambah Data</a>
<br />
<br />

<div class="alert alert-info alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
		aria-hidden="true">×</button>
	<h4>Keterangan</h4>
	Aktifkan status "Y" Jika materi dimulai.
</div>

<div class="panel panel-default">
	<div class="panel-heading">Materi</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover"
				id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Sub Judul</th>
						<th><center>Status</center></th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        include "koneksi.php";

                        $tampil = mysqli_query($koneksi, "SELECT * FROM `materi` ORDER BY `id_materi`");
                        $no = 1;

                        while ($k = mysqli_fetch_array($tampil)) {

                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$k[sub_judul]</td>";
                            echo "<td><center>$k[aktif]</center></td>";
                            echo "
								<td>
									<center>
										<a class='btn btn-success' href='?page=aksimateri&materi=form-edit&id_materi=$k[id_materi]'>
											<i class='fa fa-edit'>Edit</i>
										</a>
										<a class='btn btn-danger' href='?page=aksimateri&materi=hapus&id_materi=$k[id_materi]'>
											<i class='fa fa-pencil'>Delete</i>
										</a>
									</center>
								</td>
							";
                            echo "</tr>";

                            $no++;
                        }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>