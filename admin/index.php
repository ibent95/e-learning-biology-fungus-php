<?php

session_start();
if (isset($_POST['login'])) {

    include("koneksi.php");

    $username   = htmlentities((trim($_POST['username'])));
    $password   = htmlentities(md5($_POST['password']));

    $login      = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'");
    $cek_login  = mysqli_num_rows($login);

    echo "Coba";
    if (empty($cek_login)) {

        echo "<script> document.location.href='index.php?status=Password Anda salah!'; </script>";
    } else {

        // daftarkan ID jika user dan password BENAR
        while ($row = mysqli_fetch_array($login)) {
            $id_admin = $row['id_admin'];

            $_SESSION['id_admin'] = $id_admin;
            $_SESSION['username'] = $username;
        }

        echo "<script> document.location.href='home.php'; </script>";
    }
} else {
    unset($_POST['login']);
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type"
	content="text/html; charset=utf-8;charset=utf-8" />
<link href="css/screen.css" rel="stylesheet" type="text/css"
	media="screen" />
<link href="css/button.css" rel="stylesheet" type="text/css"
	media="screen" />
</head>
<body onLoad="document.postform.elements['username'].focus();">
	<div id="containerr">
		<div id="contentt">
			<div id="loginBox">
				<p>&nbsp;</p>
				<p>
					<span class="style1">Administrator</span>
				</p>
				<p>
					<?php 
					   if (isset($_GET['status'])) {
					       echo $_GET['status'];
					   }
					?>
				</p>
				<p class="info" align="center"></p>
				<form action="index.php" method="post" name="postform">
					<label for="loginName">Username:</label> <input id="username"
						class="textFieldLogin" name="username" type="text" /> <label
						for="loginPass">Password:</label> <input id="password"
						class="textFieldLogin" name="password" type="password" value="" />
					<div class="MBbuttonLogin">
						<input type="submit" id="loginButton" class="button" value="LOGIN"
							name="login" />
					</div>
				</form>
				<div class="close" />

			</div>
		</div>
	</div>

</body>
</html>