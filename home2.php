<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WafaTivi | Inspirasi Berhijrah</title>
<LINK REL="SHORTCUT ICON" HREF="images/wafaicon.png" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
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
<table style="text-align:center" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="100%">
                  
                  <!--<nav id="nav" role="navigation" name="nav">
    <a href="#nav" title="Show navigation">Show navigation</a>
    <a href="#" title="Hide navigation">Hide navigation</a>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/">Blog</a>
          <ul>
                <li><a href="/">Design</a></li>
                <li><a href="/">HTML</a></li>
                <li><a href="/">CSS</a></li>
                <li><a href="/">JavaScript</a></li>
          </ul>
      </li>
        <li>
            <a href="/">Work</a>
          <ul>
                <li><a href="/">Web Design</a></li>
                <li><a href="/">Typography</a></li>
                <li><a href="/">Front-End</a></li>
            </ul>
        </li>
      <li><a href="/">About</a></li>
      <li><a href="/">Aboutus1</a></li>
      <li><a href="/">Aboutus2</a></li>
      <li><a href="/">Aboutus3</a></li>
        <li><a href="/">Aboutus4</a></li>
  </ul>
</nav> -->
  </td>
                </tr>
  </table>

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
      <td align="center" valign="middle">Satu-satunya Penyedia layanan  TV Islami Terbaik dan Terkemuka</td>
      <td align="center" valign="middle"><img src="images/logopng3.png" alt="" width="131" height="79" /></td>
    </tr>
  </table>
</div>
<div class="footer2" id="footer" ">© Copyright PT. WAFAtv. All Rights Reserved</div>


</body>
</html>