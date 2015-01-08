<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WAFA TV | INSPIRASI BERHIJRAH</title>
<LINK REL="SHORTCUT ICON" HREF="images/wafaicon.png" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
    <style type="text/css">
<!--
.style6 {
	font-size: 16px;
	color: #FF0000;
	font-weight: bold;
}
.style8 {color: #FF0000}
-->
    </style>
</head>
<body>
<div class="headere" id="heads"></div>
<div class="headerdua" id="headerdua">
  <table width="0" border="0" align="center" cellpadding="0" cellspacing="0" height="107">
    <tr>
      <td  rowspan="2" align="center" valign="middle"><img src="images/logopng3.png" width="159" height="97" /></td>
      <td width="61%"  rowspan="2" valign="middle"></td>
      <td  align="right" valign="middle" class="tulisanheader"><a href="home.php?page=lokasi">Contact Us</a> </td>
      <td align="center" valign="middle" ><img src="images/garskecil.png" width="9" height="48" /></td>
      <td  align="left" valign="middle" class="tulisanheader"><a href="home.php?page=sitemap">Site Map</a></td>
    </tr>
  </table>
</div>
<div style="height:2px; background-color:#f3f3f3">
</div>
<div class="tombolbg">
<div style="width:100%; background-color:#c3458c; height:34px; ">
<nav id="nav" role="navigation" name="nav">
    <a href="#nav" title="Show navigation">Show navigation</a>
    <a href="#" title="Hide navigation">Hide navigation</a>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="home.php?page=aboutus">Tentang Kami</a>
          <ul>
            <li><a href="home.php?page=sejarah">Sejarah</a></li>
                <li><a href="home.php?page=visimisi">Visi Misi</a></li>
                <li><a href="home.php?page=profilperusahaan">Profil Perusahaan</a></li>
				<li><a href="home.php?page=konsumen">Konsumen</a></li>
          </ul>
      </li>
        <li>
            <a href="home.php?page=layanan">Layanan</a>
            <ul>
              <li><a href="home.php?page=produk">Produk</a></li>
                <li><a href="home.php?page=channel">Channel Unggulan</a></li>
                <li><a href="home.php?page=aftersales">After Sales</a></li>
          </ul>
      </li>
      <li><a href="home.php?page=partner">Partner Kami</a></li>
      <li><a href="home.php?page=testimonial">Testimonial</a></li>
      <li><a href="home.php?page=artikel">Artikel</a></li>
    <li><a href="home.php?page=kontakkami">Kontak Kami</a></li>
        <li><a href="home.php?page=lokasi">Lokasi</a></li>
  </ul>
</nav>
</div>


</div>
<div id="bawahslide" style="height:10px; color:"></div>

</div>
<div id="isicontent">
<?php
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $p=$_GET['page'];

				$page=$p."a.php";
				
				if(file_exists($page))
						include($page);
				elseif($p=="")
						include("homea.php");
				else
						echo"what are you looking for?";
              ?>
</div>
<div id="aaa" style="height:20px"> </div>
<div class="bawahbawahslide2" id="bawahbawahslide2" >
  <table width="0" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle"><p>Satu-satunya Penyedia Beragam  Channel Islami</p>
      </td>
      <td align="center" valign="middle"><img src="images/logopng3.png" alt="" width="131" height="79" /></td>
    </tr>
  </table>
</div>
<div class="footer2" id="footer" ">© Copyright PT. WAFAtv. All Rights Reserved</div>


</body>
</html>