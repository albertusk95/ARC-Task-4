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
	include "DATABASE-ADMIN-GUEST.php";
	include "TABEL-ADMIN-GUEST.php";
	$query = mysql_query("DELETE FROM user");
	$sql_get = mysql_query ("SELECT * FROM user");
 	$num_row = mysql_num_rows($sql_get);
	echo "Anda telah logout."."<br>";
	echo "Total login sebagai admin/user :"." ".$num_row."<br>";
?>