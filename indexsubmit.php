<?php include
"db.php";
?>
<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM admin WHERE username = '$username'";
$hasil = mysql_query($query) or die("Error");
$data  = mysql_fetch_array($hasil);
 

 
$pengacak  = "NDJS3289JSKS190JISJI";
 
 
// cek kesesuaian password terenkripsi dari form login
// dengan password terenkripsi dari database
if (md5($pengacak.md5($password).$pengacak) == $data['password'])
{
    // jika sesuai, maka buat session untuk username
    $_SESSION['username'] = $username;
 
   // menampilkan menu ke halaman akses
   ?>
        
        	<script language="javascript" type="text/javascript">
		alert('Selamat Datang');
		window.location = 'admin/dataemail.php';
	</script> <?php
}
else 
unset($_SESSION['username']);
   ?>
        
        	<script language="javascript" type="text/javascript">
		alert('Login Gagal, Username / Password salah');
		window.location = 'admin';
	</script> <?php

//echo md5($pengacak.md5($password).$pengacak);
//header("Location: logingagal.php?gagal");
?>