<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WafaTivi</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
	<script>
	 // DOM ready
	 $(function() {
	   
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
	   // To make dropdown actually work
	   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 });
	</script>
</head>

<body>
<div class="headere" id="heads"></div>
<div class="headerdua" id="headerdua">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="107">
    <tr>
      <td width="21%" rowspan="3" align="center"><img src="images/logopng.png" width="148" height="83" /></td>
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
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:center">
    <tr>
    <td width="50"  >&nbsp;</td>
      <td width="2%" class="arrow-left"><a href="#"></a></td>
      <td width="7%" align="center" valign="middle" class="isitombol"><a href="#">Home</a></td>
      <td width="2%" class="arrow-right"><a href="#"></a></td>
      <td width="1%" class="spasitombol">&nbsp;</td>
      <td width="2%" class="arrow-left">&nbsp;</td>
      <td width="7%" class="isitombol">Tentang Kami</td>
      <td width="2%" class="arrow-right">&nbsp;</td>
      <td width="1%" class="spasitombol">&nbsp;</td>
      <td width="2%" class="arrow-left">&nbsp;</td>
      <td width="7%" class="isitombol">Layanan</td>
      <td width="2%" class="arrow-right">&nbsp;</td>
      <td width="1%" class="spasitombol">&nbsp;</td>
      <td width="2%" class="arrow-left">&nbsp;</td>
      <td width="7%" class="isitombol">Partner Kami</td>
      <td width="2%" class="arrow-right">&nbsp;</td>
      <td width="1%" class="spasitombol">&nbsp;</td>
      <td width="2%" class="arrow-left">&nbsp;</td>
      <td width="8%" class="isitombol">Testimonial</td>
      <td width="2%" class="arrow-right">&nbsp;</td>
      <td width="1%" class="spasitombol">&nbsp;</td>
      <td width="2%" class="arrow-left">&nbsp;</td>
      <td width="7%" class="isitombol">Artikel</td>
      <td width="2%" class="arrow-right">&nbsp;</td>
      <td width="1%" class="spasitombol">&nbsp;</td>
      <td width="2%" class="arrow-left">&nbsp;</td>
      <td width="7%" class="isitombol">Kontak Kami</td>
      <td width="2%" class="arrow-right">&nbsp;</td>
      <td width="1%" class="spasitombol">&nbsp;</td>
      <td width="2%" class="arrow-left">&nbsp;</td>
      <td width="7%" class="isitombol">Lokasi</td>
      <td width="6%" class="arrow-right">&nbsp;</td>
      <td width="50"  >&nbsp;</td>
    </tr>
  </table>
</div>
<div id="headerdua" style="height:5px;"></div>
<div id="aa" style="height:10px;">
</div>
<div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/javascript-image-slider" target="_blank">
                <img src="images/image-slider-1.jpg" alt="Welcome to Menucool.com" />
            </a>
            <img src="images/image-slider-2.jpg" alt="" />
            <img src="images/image-slider-3.jpg" alt="Pure Javascript. No jQuery. No flash." />
            <img src="images/image-slider-4.jpg" alt="#htmlcaption" />
            <img src="images/image-slider-5.jpg" />
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
  </div>
<div class="bawahslide" id="bawahslide" ></div>
<div class="bawahbawahslide" id="bawahslide" >
<ul class="slider-main-tab-list l">
								<li class="nbl"><a href="http://www.mnc.co.id/businesses/freetoair/en"><span>FREE TO AIR TV'S</span></a></li>
								<li><a href="http://www.mnc.co.id/businesses/content/en"><span>CONTENT</span></a></li>
								<li><a href="http://www.mnc.co.id/businesses/sindomedia/en"><span>SINDOMEDIA</span></a></li>
								<li><a href="http://www.mnc.co.id/businesses/other/en"><span>PRINT</span></a></li>
								<li class="nbr"><a href="http://www.mnc.co.id/businesses/other/en"><span>RADIO</span></a></li>
							</ul>
</div>
<div class="footer" id="footer" ">Footer</div>


</body>
</html>