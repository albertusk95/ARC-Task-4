<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'database_admin_guest';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Koneksi Umum Gagal' . mysql_error());
}

if (!mysql_select_db($dbname)) { die('Gagal memilih database' . mysql_error()); }

$result = "CREATE TABLE IF NOT EXISTS user (username VARCHAR(100), password VARCHAR(100))";
if (mysql_query($result))
{
 echo "";
}
else 
{
 echo "Pembuatan Tabel Gagal" . mysql_error() . "<br>";
}
?>