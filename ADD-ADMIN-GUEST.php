<?php
	include "DATABASE-ADMIN-GUEST.php";
	include "TABEL-ADMIN-GUEST.php";
	$username = addslashes(strip_tags ($_POST['USERNAME_LOGIN']));
	$password = addslashes(strip_tags ($_POST['PASSWORD_LOGIN']));
	if ($username && $password)
	{ 
          if ($username=="Admin" && $password=="123")
		{ echo "LOGIN sebagai : ADMIN"."<br>"; }
	  else if ($username=="guest" && $password=="guest")
		{ echo "LOGIN SEBAGAI : USER BIASA"."<br>"; }
	  else { die("Masukan username dan password tidak cocok"); }

	  $sql_insert = mysql_query("INSERT INTO user VALUES ('$username','$password')");
          echo "Anda berhasil login. Klik link di samping untuk masuk ke halaman utama :"." "."<a href='index.php'>Halaman Utama";
	}
	else
	{ 
	echo "Mohon isi semua kotak"; }
?>