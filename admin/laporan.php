<title>Laporan Kelulusan</title>
<body onLoad="window.print()">
<?php
    // error_reporting(0);
    session_start();
    require_once "koneksi.php";
?>
<table class="basic" border="0" align="center" cellpadding="0"
		cellspacing="0">
		<tr>
			<td width="136" rowspan="3" align="center"><img src="img/logo.jpg"
				width="104" height="90" alt=""></td>
			<td width="883" align="center">&nbsp;</td>
			<td width="26" rowspan="6">&nbsp;</td>
		</tr>
		<tr>
			<td align="center"><strong> </strong>
				<p align="left">
					<strong>MTS BINA ULAMA SILO BARU</strong>
				</p></td>
		</tr>
		<tr>
			<td align="center"><p align="left">
					Jln. XXXXXX XX<br> Telp. +62 852-6121-9496, Kode Pos. 21211, Email.
					namainstansi@gmail.com
				</p>
				<p align="left">
					<b>Laporan Data Kelulusan</b>
				</p></td>
		</tr>

		<tr>
			<td colspan="2"><center>
					<b>=============================================================================================================</b>
				</center></td>
		</tr>
	</table>

<?php
echo "<table width=100% border=1>
					<tr bgcolor='Grey'>
                        <th width=30px>No</th>
						<th>Tanggal Ujian</th>
						<th>Nama</th>
						<th>NISN</th>
						<th>Asal Sekolah</th>
						<th>Alamat</th>
						<th>Skor</th>
						<th>Status</th>
						</tr>
                    </thead>
                    <tbody>";
$query = mysqli_query($koneksi, "SELECT * FROM `tabel_nilai`, `tabel_user` WHERE `tabel_nilai`.`id_user`=`tabel_user`.`id_user`");
$no = 1;
while ($i = mysqli_fetch_array($query)) {

    echo "<tr class='gradeX'>";
    echo "<td>$no</td>";
    echo "<td>$i[tanggal] </td>";
    echo "<td>$i[nama_user]</td>";
    echo "<td>$i[nisn]</td>";
    echo "<td>$i[asalsekolah]</td>";
    echo "<td>$i[alamat]</td>";
    echo "<td>$i[point]</td>";
    ?> <td><?php if  ($i['point'] >5) {echo "<span class='btn btn-success btn-lg'>LULUS</span>";} else {echo"<span class='btn btn-danger btn-lg'>TIDAK LULUS</span>";}?><span></span></td><?php
    echo "     </tr>";
    $no ++;
}
?>

<br>
	<br>

	<table width="100%">
		<tr>
			<td colspan="2"></td>
			<td width="286"></td>
		</tr>
		<tr>
			<td width="230" align="center">&nbsp;</td>
			<td width="530"></td>
			<td align="center">Mengetahui <br> Pimpinan Instansi
			</td>
		</tr>
		<tr>
			<td align="center"><br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /></td>
			<td>&nbsp;</td>
			<td align="center" valign="top"><br /> <br /> <br /> <br /> <br /> (
				...................................... )<br /></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</body>