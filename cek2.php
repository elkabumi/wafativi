<?php
// mengecek ada tidaknya session untuk username
if (isset($_SESSION['username']))
{
   header("Location: dataemail.php");
   exit;
}
 
?>