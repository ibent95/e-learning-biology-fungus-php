<?php
    session_start();
    include "koneksi.php";
?>

<li>
    <a class="active-menu" href="home.php">
        <i class="fa fa-dashboard fa-2x fa-fw"></i>
        Home
    </a>
</li>
<li>
    <a  href='?page=daftar'>
        <i class='fa fa-bar-chart-o fa-2x fa-fw'></i>
        Daftar
    </a>
</li>
<li>
    <a href='?page=timers'>
        <i class='fa fa-bell-o fa-2x fa-fw'></i>
        Timers
    </a>
</li>
<li>
    <a href='?page=matkul'>
        <i class='fa fa-desktop fa-2x fa-fw'></i>
        Tes
    </a>
</li>
<li>
    <a href='?page=materi'>
        <i class='fa fa-book fa-2x fa-fw'></i>
        Materi
    </a>
</li>
<li>
    <a href='?page=soal'>
        <i class='fa fa-table fa-2x fa-fw'></i> Input
        Soal
    </a>
</li>
<li>
    <a  href='?page=view'>
        <i class='fa fa-bar-chart-o fa-2x fa-fw'></i> Lihat
        Soal
    </a>
</li>
<li>
    <a href="?page=siswa">
        <i class="fa fa-sitemap fa-2x fa-fw"></i>
        Siswa
    </a>
</li>
<li>
    <a href="laporan.php" target="_blank">
        <i class="fa fa-list-alt fa-2x fa-fw"></i>
        Laporan
    </a>
</li>