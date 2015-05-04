<?php
	include "DATABASE-ADMIN-GUEST.php";
	include "TABEL-ADMIN-GUEST.php";
	$sql_get = mysql_query ("SELECT * FROM user");
 	$num_row = mysql_num_rows($sql_get);
 	if ($num_row ==0) {
 	echo "BELUM LOGIN!"."<br>";
	header ("location:http://localhost/FormRegistrasiLogin/LOGIN.php");
	}
	else {
        $result = mysql_query ("SELECT * FROM user");
	while($row = mysql_fetch_array($result)) 
         { 
		if ($row["username"]=="Admin" && $row["password"]=="123")
		{
			echo "LOGIN SEBAGAI : ADMIN"."<br>";
		}
		else
		{ echo "LOGIN SEBAGAI : USER BIASA"."<br>";
		  die ("ANDA TIDAK DIPERBOLEHKAN MENGAKSES HALAMAN INI!");
		}
	 }
	}
?>

<?php    
    $dbHost = "localhost";    
    $dbUser = "root";    
    $dbPass = "";    
    $dbName = "database_username_email";    
   
    $conn = mysql_connect($dbHost, $dbUser, $dbPass, $dbName);    
   
    if (!$conn) die("Koneksi Umum Gagal: " . mysql_error());    
    else echo "";     
       
    $dbSelected = mysql_select_db($dbName, $conn);      
         
    if (!$dbSelected) die ('Koneksi ke Database Gagal: ' . mysql_error());    
    else echo "";      
          
    $query="SELECT * FROM users";     
          
    if (mysql_query($query)) 
    { $result=mysql_query($query); } 
    else { die ("Error menjalankan query". mysql_error()); }     
         
    if (mysql_num_rows($result) > 0)    
    {    
	 echo '<h2 align="center">USERNAME - EMAIL YANG TELAH DIDAFTARKAN</H2><br>';
	 echo '<table border="1" align="center">'; 
	 echo '<tr>';
		echo '<td align="center" width = "500">Username</td>';
		echo '<td align="center" width = "500">Email</td>';
	 echo '</tr>';
         while($row = mysql_fetch_array($result)) 
         {          
	      echo '<tr>';
		echo '<td align="center" width = "500">'.$row["username"].'</td>';
		echo '<td align="center" width = "500">'.$row["email"].'</td>';
	      echo '</tr>';
	 }     
	 echo '</table>';
    }    
    else echo "Tidak ada username atau email yang didaftarkan ke database";    
       
    mysql_close($conn);    
?>    