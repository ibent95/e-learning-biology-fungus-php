<?php
if(isset($_SESSION['id_admin'])){
	include ("koneksi.php");
	
	if (isset($_POST['submit'])){
		$kategori=ucwords(htmlentities((trim($_POST['kategori']))));
		$pertanyaan=ucwords(htmlentities((trim($_POST['pertanyaan']))));
		$pilihan_a=ucwords(htmlentities((trim($_POST['pilihan_a']))));
		$pilihan_b=ucwords(htmlentities((trim($_POST['pilihan_b']))));
		$pilihan_c=ucwords(htmlentities((trim($_POST['pilihan_c']))));
		$pilihan_d=ucwords(htmlentities((trim($_POST['pilihan_d']))));
		
		$jawaban=ucwords(htmlentities((trim($_POST['jawaban']))));
		$publish=htmlentities((trim($_POST['publish'])));
		$tipe=htmlentities((trim($_POST['tipe'])));
		
		$query=mysql_query("insert into tabel_soal values('','$kategori','$pertanyaan','$pilihan_a','$pilihan_b','$pilihan_c','$pilihan_d','$jawaban','$publish','$tipe')");
		
		if($query){
			?><script language="javascript">document.location.href="?page=view";</script><?php
		}else{
			echo mysql_error();
		}
		
	}else{
		unset($_POST['submit']);
	}
	?>
	
	
	                     <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-desktop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Input Soal</p>
                   
                </div>
             </div>


    <div class="col-md-6">
    <form action="?page=soal" method="post">
	 
	 <div class="form-group">
     <label>Select Matakuliah</label>
     <?php 
	 echo"<select name='kategori' class='form-control'>
            <option value=0 selected>- Pilih Kategori -</option>";
            $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
            }
	echo "</select>";
	 ?>
     </div>
	 
	<div class="form-group">
    <textarea class="form-control" rows="3" name="pertanyaan" placeholder="Pertanyaan"></textarea>
    </div>
	
	<div class="form-group">
	<input name="pilihan_a" class="form-control" placeholder="Pilihan A" />
    </div>
	
	<div class="form-group">
	<input name="pilihan_b" class="form-control" placeholder="Pilihan B" />
    </div>
	
	<div class="form-group">
	<input name="pilihan_c" class="form-control" placeholder="Pilihan C" />
    </div>
	
	<div class="form-group">
	<input name="pilihan_d" class="form-control" placeholder="Pilihan D" />
    </div>
	
	<div class="form-group">
	<label>Jawaban</label>
	<select name="jawaban" class="btn btn-default dropdown-toggle">
        	<option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
        </select>
		
		<label>Publish</label>
	<select name="publish" class="btn btn-default dropdown-toggle">
        	<option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
		
		<label>Tipe</label>
	<select name="tipe" class="btn btn-default dropdown-toggle">
        	<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
		
    </div>
	
	<div class="form-group">
	<input name="submit" type="submit" value="Submit" class="btn btn-danger btn-lg" />&nbsp;
    </div>
	
	
    </form>
</div>
    
<?php
}else{
	?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>


    
