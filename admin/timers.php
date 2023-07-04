<h2>
	<strong>Set Timers</strong>
</h2>

<div class="alert alert-info alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
		aria-hidden="true">×</button>
	<h4>Keterangan</h4>
	Timer untuk menentukan waktu lama waktu ujian.
	<br />
	<br />
                   
	<?php
        include_once 'koneksi.php';
        $detailtimers = mysqli_query($koneksi, "SELECT * FROM `timers`");
        $d = mysqli_fetch_array($detailtimers);
        
        echo "
            <form action='cek_status.php' method='post'>
                <div class='form-group'>
                    <label>Set Timers Timers</label>
                    <input class='form-control' name='timers' placeholder='$d[timers]'/>
                </div>
                <input type='submit' class='btn btn-success btn-lg' value='Set Timer'>
            </form>
        ";
    ?>
</div>