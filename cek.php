<?php
 
session_start();
 
// mengecek ada tidaknya session untuk username
if (!isset($_SESSION['username']))
{
   header("Location: index.php");
   exit;
}
 
?>