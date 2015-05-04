<?php
	include "DATABASE-ADMIN-GUEST.php";
	include "TABEL-ADMIN-GUEST.php";
	$sql_get = mysql_query ("SELECT * FROM user");
 	$num_row = mysql_num_rows($sql_get);
 	if ($num_row ==0) {
 	echo "BELUM LOGIN!"."<br>";
	header ("location:http://localhost/FormRegistrasiLogin/LOGIN.php");
	}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if (! $conn)
{
	die ("Koneksi Umum Gagal" . mysql_error());
}

$sql="CREATE DATABASE IF NOT EXISTS database_username_email ";

if (mysql_query($sql) )
{
	echo "";
}
else
{
	echo "Database tidak dapat dibuat". mysql_error () . "<br>";
}
?> 