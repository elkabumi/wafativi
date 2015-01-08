<?php
session_start();
 
// menghapus session username
unset($_SESSION['username']);
header("Location: home.php");
?>