
<a href="?page=aksi&amp;matkul=form-input"
	class="btn btn-success btn-lg">Tambah Data</a>
<br />
<br />

<div class="alert alert-info alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
		aria-hidden="true">×</button>
	<h4>Keterangan</h4>
	Aktifkan status "Y" Jika ujian matakuliah dimulai.
</div>

<div class="panel panel-default">
	<div class="panel-heading">Matakuliah Table</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover"
				id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Matakuliah</th>
						<th><center>Status</center></th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        include "koneksi.php";
    
                        $tampil = mysqli_query($koneksi, "SELECT * FROM `kategori` ORDER BY `nama_kategori`");
                        $no = 1;

                        while ($k = mysqli_fetch_array($tampil)) {
    
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$k[nama_kategori]</td>";
                            echo "<td><center>$k[aktif]</center></td>";
                            echo "<td><center><a class='btn btn-success' href='?page=aksi&matkul=form-edit&id=$k[id_kategori]'><i class='fa fa-edit'>Edit</i></a>  
    					            <a class='btn btn-danger' href='?page=aksi&matkul=hapus&id=$k[id_kategori]'><i class='fa fa-pencil'>Delete</i></a></center></td>";
                            echo "</tr>";
                            $no ++;
                        }
    
                        echo "</tbody></table> ";
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>