<?php
	include "DATABASE-ADMIN-GUEST.php";
	include "TABEL-ADMIN-GUEST.php";
	$sql_get = mysql_query ("SELECT * FROM user");
 	$num_row = mysql_num_rows($sql_get);
 	if ($num_row > 0 ) {
		header ("location:http://localhost/FormRegistrasiLogin/index.php");
	}
?>

<!doctype html>
<html>
<form action="ADD-ADMIN-GUEST.php" method="post">
			<h1 align="center">FORM LOGIN</h1><hr>
			<h3 align="center">Form LOGIN digunakan untuk mengecek apakah Anda masuk sebagai admin atau user biasa.
			Akan ada pembatasan akses untuk melihat semua username dan alamat email yang telah terdaftar di database
			bagi Anda jika masuk sebagai user biasa</h3><hr>
			<table border=0 align="center">	
				<tr>
					<td align="left"><h2>Username</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="USERNAME_LOGIN" id="TEXT_LOGIN"></td>
				</tr>
				<tr>
					<td align="left"><h2>Password</h2></td> <td width=50></td>
					<td><input type="password" size=30 name="PASSWORD_LOGIN" id="TEXT_LOGIN"></td>
				</tr>
				<tr>
				<td align="center" colspan=3><input type="submit" id="BUTTON_LOGIN" value="LOGIN" name="SUBMISSION_LOGIN"></td>
				</tr>
			</table>
			<hr><h3 align="center">Anda harus login terlebih dahulu sebelum masuk ke halaman form registrasi; Admin dan User biasa
			memiliki username dan password berbeda yang sudah ditentukan; Jika Anda berada di
			halaman website, maka Anda tidak dapat mengakses halaman LOGIN Admin/User jika belum LOGOUT terlebih dahulu</h3>
</form>
</html>