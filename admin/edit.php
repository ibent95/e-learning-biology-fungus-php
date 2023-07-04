<?php
    if (isset($_SESSION['id_admin'])) {
        include ("koneksi.php");
        
        if (isset($_POST['submit'])) {
        	$id           = htmlentities((trim($_POST['id'])));
        	$pertanyaan   = ucwords(htmlentities((trim($_POST['pertanyaan']))));
        	$pilihan_a    = ucwords(htmlentities((trim($_POST['pilihan_a']))));
        	$pilihan_b    = ucwords(htmlentities((trim($_POST['pilihan_b']))));
        	$pilihan_c    = ucwords(htmlentities((trim($_POST['pilihan_c']))));
        	$pilihan_d    = ucwords(htmlentities((trim($_POST['pilihan_d']))));
        	
        	$jawaban      = ucwords(htmlentities((trim($_POST['jawaban']))));
        	$publish      = htmlentities((trim($_POST['publish'])));
        	$tipe         = htmlentities((trim($_POST['tipe'])));
        	
        	$query        = mysqli_query($koneksi, "UPDATE `tabel_soal` SET `pertanyaan`='$pertanyaan', `pilihan_a`='$pilihan_a', `pilihan_b`='$pilihan_b',
        	 `pilihan_c`='$pilihan_c', `pilihan_d`='$pilihan_d', `jawaban`='$jawaban', `publish`='$publish', `tipe`='$tipe' WHERE `id_soal`='$id'");
        	
        	if ($query) {
        		?>
        			<script language="javascript">document.location.href="?page=view";</script>
        		<?php
        	} else {
        		echo mysqli_error($koneksi);
        	}
        	
        } else {
        	unset($_POST['submit']);
        }
?>

<h1>Input Soal</h1>

<?php
	$id    = $_GET['id'];
	$query = mysqli_query($koneksi, "SELECT * FROM `tabel_soal` WHERE `id_soal`='$id'");
	$row   = mysqli_fetch_array($query);
?>

<div class="col-md-6">
    <form action="?page=edit" method="post">
    	<input type="hidden" name="id" value="<?php echo $id;?>" />
    	
    	<div class="form-group">
    	 <label>Input Pertanyaan</label>
        <textarea class="form-control" rows="3" name="pertanyaan" placeholder="Pertanyaan"><?php echo $row['pertanyaan']?></textarea>
        </div>
    	
    	<div class="form-group">
    	<label>Pilihan A</label>
    	<input name="pilihan_a" class="form-control" value="<?php echo $row['pilihan_a'];?>" />
        </div>
    	
    	<div class="form-group">
    	<label>Pilihan B</label>
    	<input name="pilihan_b" class="form-control" value="<?php echo $row['pilihan_b'];?>" />
        </div>
    	
    	<div class="form-group">
    	<label>Pilihan C</label>
    	<input name="pilihan_c" class="form-control" value="<?php echo $row['pilihan_c'];?>" />
        </div>
    	
    	<div class="form-group">
    	<label>Pilihan D</label>
    	<input name="pilihan_d" class="form-control" value="<?php echo $row['pilihan_d'];?>" />
        </div>
    	
    	<div class="form-group">
    	<label>Jawaban</label>
    	<select name="jawaban" class="btn btn-default dropdown-toggle">
            	<option value="a" <?php if($row['jawaban']=="A"){ echo "selected='selected'"; }?>>A</option>
                <option value="b" <?php if($row['jawaban']=="B"){ echo "selected='selected'"; }?>>B</option>
                <option value="c" <?php if($row['jawaban']=="C"){ echo "selected='selected'"; }?>>C</option>
                <option value="d" <?php if($row['jawaban']=="D"){ echo "selected='selected'"; }?>>D</option>
            </select>
    		
    		<label>Publish</label>
    	<select name="publish" class="btn btn-default dropdown-toggle">
            	<option value="yes" <?php if($row['publish']=="yes"){ echo "selected='selected'"; }?>>Yes</option>
                <option value="no" <?php if($row['publish']=="no"){ echo "selected='selected'"; }?>>No</option>
            </select>
    		
    		<label>Tipe</label>
    	<select name="tipe" class="btn btn-default dropdown-toggle">
            	<option value="1" <?php if($row['tipe']=="1"){ echo "selected='selected'"; }?>>1</option>
                <option value="2" <?php if($row['tipe']=="2"){ echo "selected='selected'"; }?>>2</option>
                <option value="3" <?php if($row['tipe']=="3"){ echo "selected='selected'"; }?>>3</option>
                <option value="4" <?php if($row['tipe']=="4"){ echo "selected='selected'"; }?>>4</option>
                <option value="5" <?php if($row['tipe']=="5"){ echo "selected='selected'"; }?>>5</option>
                <option value="6" <?php if($row['tipe']=="6"){ echo "selected='selected'"; }?>>6</option>
                <option value="7" <?php if($row['tipe']=="7"){ echo "selected='selected'"; }?>>7</option>
            </select>
    		
        </div>
    	
    	<div class="form-group">
    		<input name="submit" type="submit" value="Submit" class="btn btn-danger btn-lg" />&nbsp;
        </div>

    </form>
</div>

<?php } else { ?>
	<p>Anda belum login. silahkan <a href="index.php">Login</a></p>
<?php } ?>




    
