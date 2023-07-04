<?php
  include "koneksi.php";
  
  mysqli_query($koneksi, "UPDATE `timers` SET `timers`='$_POST[timers]'");
  
  echo "<script>alert('Waktu telah disetting'); window.location = 'home.php?page=status'</script>";
?>
