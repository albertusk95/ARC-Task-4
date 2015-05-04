<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if (! $conn)
{
	die ("Koneksi Umum Gagal" . mysql_error());
}

$sql="CREATE DATABASE IF NOT EXISTS database_admin_guest ";

if (mysql_query($sql) )
{
	echo "";
}
else
{
	echo "Database tidak dapat dibuat". mysql_error () . "<br>";
}
?> 