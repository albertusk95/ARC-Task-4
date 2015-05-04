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

<div class="header_status"><h1 align="center">STATUS REGISTRASI</h1></div>

<?php
include "mydatabase.php";
include "tabelanddatabase.php";
$fullname = addslashes(strip_tags ($_POST['fullname']));
$username = addslashes(strip_tags ($_POST['username']));
$email = addslashes(strip_tags ($_POST['email']));

//script ini untuk mengecek apakah form sudah terisi semua
$email_validity_status=0;
$daftar_validity_status=0;
$username_validity_status=0;
$email_registrated_status=0;
$fullname_status=0; $username_status=0; $email_status=0;

if ($fullname && $username && $email) 
{
// untuk validasi alamat email si user
$daftar_validity_status=1; 
$fullname_status=1; $username_status=1; $email_status=1;

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $email_validity_status=1;
} else {
    $email_validity_status=0;
}

 $sql_get = mysql_query ("SELECT * FROM users WHERE username = '$username'");
 $num_row = mysql_num_rows($sql_get);
 if ($num_row ==0) {
 $username_validity_status = 1;
 }
 else {
	$username_validity_status=0;
 }
 
 $sql_get = mysql_query ("SELECT * FROM users WHERE email = '$email'");
 $num_row = mysql_num_rows($sql_get);
 if ($num_row ==0) {
 $email_registrated_status = 1;
 }
 else {
	$email_registrated_status=0;
 }
}
 
else {
	if ( $fullname ) { $fullname_status=1; }
	if ( $username ) { $username_status=1; }
	if ( $email ) { $email_status=1; }
 	$daftar_validity_status=0;
 }
//menampilkan status registrasi
	if ($email_validity_status == 1 && $daftar_validity_status == 1 && $username_validity_status == 1 && $email_registrated_status == 1)
	{
	$sql_insert = mysql_query("INSERT INTO users VALUES ('$fullname','$username','$email')");
	echo "<div class='berhasil_daftar'>"."<h2 align='center'>"."Registrasi Email berhasil! LENGKAP!"."</h2>"."</div>";
	}
	else
	{
		if ($daftar_validity_status == 0 && $fullname_status==0)
		{echo "<div class='berhasil_daftar'>"."<h2 align='center'>"."Tolong isi kotak FULLNAME"."</div>";}
		if ($daftar_validity_status == 0 && $username_status==0)
		{echo "<div class='berhasil_daftar'>"."<h2 align='center'>"."Tolong isi kotak USERNAME"."</div>";}
		if ($daftar_validity_status == 0 && $email_status==0)
		{echo "<div class='berhasil_daftar'>"."<h2 align='center'>"."Tolong isi kotak EMAIL"."</div>";}
		if ($email_validity_status == 0 && $email_status==1) 
		{echo "<div class='berhasil_daftar'>"."<h2 align='center'>"."Email Anda tidak valid"."</div>";}
		if ($username_validity_status == 0 && $username_status==1)
		{echo "<div class='berhasil_daftar'>"."<h2 align='center'>"."Username sudah terdaftar"."</div>";}
		if ($email_registrated_status == 0 && $email_status==1)
		{echo "<div class='berhasil_daftar'>"."<h2 align='center'>"."Email sudah terdaftar"."</div>";}	
	}
?>


</body>
</html>