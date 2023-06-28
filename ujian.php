<div>
<?php
if(isset($_SESSION['id_user'])){
?>
<script type="text/javascript">
          var label =null;
          Counter=20;
          function onLoad()
          {
             label = document.getElementById("label1");
             runTimer();
          }
          function runTimer()
          {
             label.innerHTML = Counter
             Counter--;
             if (Counter < 0)
             {
                var frmSoal = document.getElementById("frmSoal");
                frmSoal.submit();
             } else {
                setTimeout(runTimer, 1000);
             }
          }
       </script>

	   <body onload='onLoad();'>



<h2>Soal ujian untuk, <strong><?php echo ucwords($_SESSION['username']);?></strong></h2>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               Jawablah pertanyaan berikut dengan tepat dan cepat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi, <a href="#" class="alert-link">Selamat mengerjakan, <?php echo ucwords($_SESSION['username']);?></a>.
                            </div>


			 <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-bell fa-5x"></i>
                            <h3>Remaining <label id="label1"></label> Second </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Timers

                        </div>
                    </div>


          <?php
		$hasil=mysqli_query($koneksi, "SELECT * FROM `tabel_soal` WHERE `publish`='yes' ORDER BY RAND()");
		$jumlah=mysqli_num_rows($hasil);
		$urut=0;
		while($row =mysqli_fetch_array($hasil))
		{
		$id=$row["id_soal"];
			$pertanyaan=$row["pertanyaan"];
			$pilihan_a=$row["pilihan_a"];
			$pilihan_b=$row["pilihan_b"];
			$pilihan_c=$row["pilihan_c"];
			$pilihan_d=$row["pilihan_d"];

			?>
			<form id="frmSoal" method="post" action="?page=jawaban">
			<input type="hidden" name="id[]" value=<?php echo $id; ?>>
			<input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
			<table width="457" border="0">
			<tr>
			  	<td width="17"><?php echo $urut=$urut+1; ?></font></td>
			  	<td width="430"><?php echo "$pertanyaan"; ?></font></td>
			</tr>
			<tr>
			  	<td height="21">&nbsp;</td>
			  	<td>A. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> <?php echo "$pilihan_a";?></font> </td>
			</tr>
			<tr>
			  	<td>&nbsp;</td>
			  	<td>B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> <?php echo "$pilihan_b";?></font> </td>
			</tr>
			<tr>
			  	<td>&nbsp;</td>
			  	<td>C. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> <?php echo "$pilihan_c";?></font> </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>D. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> <?php echo "$pilihan_d";?></font> </td>
			</tr>
			</table>
		<?php } ?>
		<br/>
		<input class="btn btn-success btn-lg" type="submit" value="selesai"/>

    </form>
</body>

<?php } else { ?>

<p>Anda belum login. silahkan <a href="index.php">Login</a></p>

<?php } ?>

</div>
