<?php
include_once("koneksi.php");

if ($_GET['matkul'] == 'form-input') {
    echo "
        <div class='col-md-6'>
            <h3>Form Input Matakuliah</h3>
            <form enctype='multipart/form-data' action='?page=aksi&matkul=input' method='post'>

                    <div class='form-group'>
                        <input name='nama' class='form-control' placeholder='Nama Matakuliah' />
                    </div>

					<div class='form-group'>
					<label>Status</label>
					</div>

					<div class='form-group'>
                        <select name='aktif' class='btn btn-default dropdown-toggle'>
						<option value='Y'>Yes</option>
						<option value='N'>No</option>
						</select>
                    </div>

					<input class='btn btn-primary' name='submit' type='submit' value='Submit' />
			</form>
        </div>
    ";
} elseif ($_GET['matkul'] == 'input') {
    $query = mysqli_query($koneksi, "INSERT INTO `kategori` (`nama_kategori`, `aktif`)  VALUES ('$_POST[nama]','$_POST[aktif]')");
    if ($query) {
        ?>
        	<script language="javascript" type="text/javascript">document.location.href="?page=matkul";</script>
        <?php
    } else {
        echo mysqli_error();
    }
} elseif ($_GET['matkul'] == 'form-edit') {
    $id = $_GET['id'];
    $edit = mysqli_query($koneksi, "SELECT * FROM `kategori` WHERE `id_kategori`='$id'");
    $z = mysqli_fetch_array($edit);

    echo "<div class='col-md-6'>
    <h3>Form Edit Matakuliah</h3>
    
	<form enctype='multipart/form-data' action='?page=aksi&matkul=update' method='post'>
	<input type=hidden name=id value='$z[id_kategori]'>
		
		<div class='form-group'>
			<input name='nama' class='form-control' value='$z[nama_kategori]' />
		</div>
										
		<div class='form-group'>
			<label>Status</label>
		</div>

		<div class='form-group'>
			<select name='aktif' class='btn btn-default dropdown-toggle'>";
    ?>

<option value="Y"
	<?php if($z['aktif']=="Y") { echo "selected='selected'"; }?>>Y</option>
<option value="N"
	<?php if($z['aktif']=="N") { echo "selected='selected'"; }?>>N</option>
<?php

echo "</select>
         </div>
		
		<input class='btn btn-primary' name='submit' type='submit' value='Submit' />
		</form></div>";
} elseif ($_GET['matkul'] == 'update') {
    $query = mysqli_query($koneksi, "UPDATE `kategori` SET `nama_kategori`='$_POST[nama]', `aktif`='$_POST[aktif]' WHERE `id_kategori`='$_POST[id]'");

    if ($query) {
        ?>
        	<script language="javascript" type="text/javascript">document.location.href="?page=matkul";</script>
        <?php
    } else {
        echo mysqli_error();
    }
} elseif ($_GET['matkul'] == 'hapus') {

    $query = mysqli_query($koneksi, "DELETE FROM `kategori` WHERE `id_kategori`='$_GET[id]'");
    if ($query) {
        ?>
        	<script language="javascript" type="text/javascript">document.location.href="?page=matkul";</script>
        <?php
	} else {
		echo mysqli_error();
	}

}

?>