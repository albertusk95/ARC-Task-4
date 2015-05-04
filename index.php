<?php
	include "DATABASE-ADMIN-GUEST.php";
	include "TABEL-ADMIN-GUEST.php";
	$sql_get = mysql_query ("SELECT * FROM user");
 	$num_row = mysql_num_rows($sql_get);
 	if ($num_row ==0) {
 	echo "BELUM LOGIN!"."<br>";
	header ("location:http://localhost/FormRegistrasiLogin/LOGIN.php");
	}

	$result = mysql_query ("SELECT * FROM user");
	while($row = mysql_fetch_array($result)) 
         { 
		if ($row["username"]=="Admin" && $row["password"]=="123")
		{ echo "LOGIN SEBAGAI : ADMIN"."<br>"; }
		else 
		{ echo "LOGIN SEBAGAI : USER BIASA"."<br>"; }
	 }
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Email Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
</head>

	<div class="container">
	<div class="header"><h1 align="center"><b>Form Registrasi Email</b></h1></div>
	<div class="navigasi">
	<ul id="nav">
      		<li><a href="#umums">Umum</a></li>
      		<li><a href="#registrations">Registrasi Email</a></li>
      		<li><a href="#logins">Login User</a></li>
		<li><a href="#logout">LOG OUT</a></li>
		<li id="credit">Oleh : Albertus Kelvin / 16514297 / STEI</li>
	</ul>
	</div>
	<div class="between">
	</div>
	<div class="main">
		<div class="general" id="umums">
			<h3 align="center">Petunjuk Umum</h3><hr>
			<ul type="disc">
				<li><h3>Tombol Registrasi untuk mendaftarkan username dan email</h3></li>
				<li><h3>Tombol Login untuk masuk ke halaman milik user yang terdaftar pada database</h3></li>
			</ul>
			<h3 align="center">Petunjuk Khusus</h3><hr>
			<ul type="square">
				<li><h3>Semua username yang didaftarkan tidak boleh ada yang sama</h3></li>
				<li><h3>Semua email yang didaftarkan tidak boleh ada yang sama</h3></li>
				<li><h3>Alamat email yang didaftarkan harus valid</h3></li>
			</ul>
			<hr>
			<h4>* Jika tidak sesuai petunjuk di atas, maka akan muncul pesan kesalahan</h4>
		</div>
		
		<div class="general" id="registrations">
			<form action="desktop-status.php" method="post">
			<h1>FORM REGISTRASI</h1><hr>
			<table border=0 align="center">
				<tr>
					<td align="left"><h2>Nama Lengkap</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="fullname" id="text-registrasi"></td>
				</tr>	
				<tr>
					<td align="left"><h2>Username</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="username" id="text-registrasi"></td>
				</tr>
				<tr>
					<td align="left"><h2>Email Address</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="email" id="text-registrasi"></td>
				</tr>
				<tr>
					<td align="left"><input type="submit" id="button-registrasi" value="SUBMIT" name="submission"></td>
				</tr>
			</table>
			</form>
		</div>
		
		<div class="general" id="logins">
			<form action="login-desktop.php" method="post">
			<h1>FORM LOGIN</h1><hr>
			<table border=0 align="center">	
				<tr>
					<td align="left"><h2>Username</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="username_login" id="text-login"></td>
				</tr>
				<tr>
					<td align="left"><h2>Email Address</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="email_login" id="text-login"></td>
				</tr>
				<tr>
					<td align="left"><input type="submit" id="button-login" value="LOGIN" name="submission_login"></td>
				</tr>
			</table>
			</form>
		</div>

		<div class="general" id="logout">
			<form action="LOGOUT-ADMIN-GUEST.php" method="post">
			<h2 align="center">KLIK TOMBOL DI BAWAH UNTUK LOGOUT SEBAGAI ADMIN/ USER BIASA</h2><hr>
			<table border=0 align="center">
				<tr>
					<td align="center"><input type="submit" id="BUTTON-LOGOUT" value="LOG   OUT" name="SUBMISSION_LOGOUT"></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
	</div>

</html>