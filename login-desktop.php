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




<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
<div class="header_status"><h1 align="center">STATUS LOGIN</h1></div>
<?php
include "mydatabase.php";
include "tabelanddatabase.php";
$username = addslashes(strip_tags ($_POST['username_login']));
$email = addslashes(strip_tags ($_POST['email_login']));

if ($username && $email)
{
	$query = "SELECT * FROM users";
	if (mysql_query($query)) {     
    	$result=mysql_query($query);} 
	else die ("Error menjalankan query". mysql_error());
	$login_status = 0;
	if (mysql_num_rows($result) > 0)
	{
		while($row = mysql_fetch_array($result)) {          
	        	if ($row["username"]==$username && $row["email"]==$email)
			{ $login_status=1; }
	 	}     
		if ($login_status == 1) 
		{ echo "<div class='login_sukses'>"."<h2 align='center'>"."LOGIN BERHASIL"."</h2></div>"; }
		else 
		{ echo "<div class='login_sukses'>"."<h2 align='center'>"."LOGIN GAGAL. TIDAK ADA KECOCOKAN."."</h2></div>"; }
	}
	else
	{ echo "<div class='login_sukses'>"."<h2 align='center'>"."Tidak ada data apapun!"."</h2></div>"; }
}
else
{
	echo "<div class='login_sukses'>"."<h2 align='center'>"."Tolong diisi semua ya!"."</h2></div>";
}
?>
</body>
</html>