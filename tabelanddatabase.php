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
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'database_username_email';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Koneksi Umum Gagal' . mysql_error());
}

if (!mysql_select_db($dbname)) { die('Gagal memilih database' . mysql_error()); }

$result = "CREATE TABLE IF NOT EXISTS users (fullname VARCHAR(100), username VARCHAR(100), email VARCHAR(100))";
if (mysql_query($result))
{
 echo "";
}
else 
{
 echo "Pembuatan Tabel Gagal" . mysql_error() . "<br>";
}
?>