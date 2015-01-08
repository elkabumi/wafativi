<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WafaTivi</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
</head>
<body>
<div class="headere" id="heads"></div>
<div class="headerdua" id="headerdua">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="107">
    <tr>
      <td width="21%" rowspan="3" align="center"><img src="images/logopng.png" /></td>
      <td width="41%" rowspan="3">&nbsp;</td>
      
    </tr>
    <tr>
      <td width="22%" align="right" class="tulisanheader">Contact Us</td>
      <td width="1%"><img src="images/garskecil.png" width="9" height="48" /></td>
      <td width="15%" align="left" class="tulisanheader">Site Map</td>
    </tr>
    <tr>
      <td align="center" class="tulisanheader">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="15%" align="center" class="tulisanheader">&nbsp;</td>
    </tr>
  </table>
</div>
<div class="headerdua" style="height:5px;">
</div>
<div class="tombolbg">
  <table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td class="tblkiri"></td>
      <td class="tblisi"><a href="index2rev2.php">home</a></td>
      <td class="tblisi"><a href="aboutus.php">Tentang Kami</a></td>
      <td class="tblisi">Layanan</td>
      <td class="tblisi">Partner Kami</td>
      <td class="tblisi">Testimonial</td>
      <td class="tblisi">Artikel</td>
      <td class="tblisi">Kontak Kami</td>
      <td class="tblisi">Lokasi</td>
      <td class="tblkanan"></td>
    </tr>
  </table>
</div>
<!--ISI-->
<div id="spasipertama" style=" height:10px"></div>
<div id="isicontent">
<?php
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $p=$_GET['page'];

				$page=$p."a.php";
				
				if(file_exists($page))
						include($page);
				elseif($p=="")
						include("index2rev2a.php");
				else
						echo"what are you looking for?";
              ?>
</div>
<div id="bawahslides" style="height:40px" ></div>
<div class="footer2" id="bawahslides" >© Copyright PT. WAFAtv. All Rights Reserved</div>
<!--<div class="footer2" id="footer" ">© Copyright PT. WAFAtv. All Rights Reserved</div>
->

</body>
</html>