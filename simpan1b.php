<?php

mysql_connect("localhost","root","");
mysql_select_db("wafativicontact");

date_default_timezone_set('Asia/Krasnoyarsk');
 
 require_once('recaptchalib.php');
 
// Get a key from http://recaptcha.net/api/getkey
$publickey = "6LezSOwSAAAAAMBhAm73Yy1VYAEcUIe-QduzxsGO";
$privatekey = "6LezSOwSAAAAAKFlqVPkI7ixjI3NGY_MLb0shsX7";
 		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

	 
	 if ($_POST["submit"]) {
    $response = recaptcha_check_answer($privatekey,
        $_SERVER["REMOTE_ADDR"],
        $_POST["recaptcha_challenge_field"],
        $_POST["recaptcha_response_field"]);
 
        if ($response->is_valid and !empty($name) and !empty($email) and !empty($message))  { 
		

 
		$kueri = "INSERT INTO kontak(name, email, message)
          VALUES('$name', '$email', '$message')";
		$hasil = mysql_query($kueri);
		?>
        
        	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'home.php?page=kontakkami';
	</script> <?php
        } else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Tolong isi semua kolom');
		window.location = 'home.php?page=kontakkami';
	</script>
 <?php
        }
}
	 ?>
