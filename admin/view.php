<?php
if(isset($_SESSION['id_admin'])){
?>
       <h2><strong>Publishing questions</strong></h2>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Berikut adalah soal soal yang dipublish dan akan dijawab oleh student, silahkan kelola dengan beberapa fitur yang disediakan.
                            
							<h4>Keterangan</h4>

                    
                    <button class="btn btn-default"><i class=" fa fa-refresh "></i> Update</button>
											<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
											<button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                    
							</div>
		
    
        <p>
        <?php
		$query=mysql_query("select * from tabel_soal order by tipe asc");
		echo "<i>Edit dan hapus soal disini : )</i>";
		?><table width="100%"><?php
		$no=0;
		while($row=mysql_fetch_array($query)){
		?>
			<tr>
           		<td><font color="#000000"><span class='btn btn-default btn-lg'><?php echo $no=$no+1;?>.</span></font></td><td><font color="#000000"><?php echo $row['pertanyaan'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#000000">A) <?php echo $row['pilihan_a'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#000000">B) <?php echo $row['pilihan_b'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#000000">C) <?php echo $row['pilihan_c'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#000000">D) <?php echo $row['pilihan_d'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#0033CC">JAWABAN : <b><span class='btn btn-success btn-lg'><?php echo $row['jawaban'];?></span></b> &raquo; PUBLISH : <span class='btn btn-info btn-lg'><?php echo $row['publish'];?></span> &raquo;
                TIPE : <b><?php echo ucwords($row['tipe']);?></b> &raquo;</font>
                <a class="btn btn-default" href="?page=edit&id=<?php echo $row['id_soal']?>" title="Edit"><img src="img/update.png" /></a> <a  class="btn btn-default" href="?page=delete&id=<?php echo $row['id_soal']?>" title="Delete" onclick="return confirm('Apakah anda yakin akan menghapus pertanyaan ini ?')"><img src="img/hapus.png" /></a>
                </td>
            </tr>
            <tr>
           		<td colspan="2"><br /></td>
            </tr>
		<?php
		}
		?>
        </table>
        </p>
<?php
}else{
	?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>
