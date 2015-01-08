<?php include
"db.php";
?>
<?php
 
// call the lib..
require_once('recaptchalib.php');
 
// Get a key from http://recaptcha.net/api/getkey
$publickey = "6LezSOwSAAAAAMBhAm73Yy1VYAEcUIe-QduzxsGO";
$privatekey = "6LezSOwSAAAAAKFlqVPkI7ixjI3NGY_MLb0shsX7";
 
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=229236523798218";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="headisi" class="bgheadisi">KONTAK KAMI</div>
<div id="spasikedua" style=" height:23px"></div>
<div id="isicontent" class="isicontent">
  
<div id="isidiisi" class="isidiisinobg">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="27">&nbsp;</td>
      <td width="231" align="center" bgcolor="#B0EFFF" class="dummytulisan">Palm Spring Regency E 38<br />
Jambangan, Surabaya
  <br />
  T. 03171512345 <br />
        M. 0821 3599 9959
        <br />
        PIN 7D7D7898 </td>
      <td width="8" align="right" bgcolor="#941F61"></td>
      <td width="455" align="left" valign="top" bgcolor="#d5f7ff" class="tulisankontakkami"><form action="simpan1b.php" method="post">
	    <p>&nbsp;&nbsp;<span style="color:#000">Your name</span><br>
	      &nbsp;
	      <input name="name" type="text" id="name" size="50%">
	      </p>
	    <hr color="#999999"/>
	    <p>&nbsp;&nbsp;<span style="color:#000">Your e-mail</span><br>
	      &nbsp;
	      <input name="email" type="text" id="email" size="50%">
	    </p>
	    <hr color="#999999" />
	    <p><br>
	      &nbsp;&nbsp;<span style="color:#000">Message</span><br>
	      &nbsp;
	      <textarea name="message" cols="40" rows="9" id="message"></textarea>
          </p>
	    <hr color="#999999" />
	    <p><br />
	      &nbsp;&nbsp;<span style="color: #000">Captha</span>
	      &nbsp;&nbsp;
	      &nbsp;&nbsp;<?php echo recaptcha_get_html($publickey, $error); ?>
	      <br />
	      &nbsp;
	      <input name="submit" type="submit" id="submit" value="Submit">
	      <input type="reset" value="Clear">
	      </p>
	    <hr color="#999999" />
      </form></td>
      
      
    </tr>
    <tr>
      <td width="27">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" bgcolor="#4662b1"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="33%" align="center" bgcolor="#4662B1"><div class="fb-like-box" data-href="https://www.facebook.com/AcaraTVISLAM" data-width="50" data-colorscheme="dark" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div></td>
          <td width="33%" align="center" bgcolor="#00CCFF"><a href="https://twitter.com/wafativi" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @wafativi</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td>
          <td width="33%" align="center" bgcolor="#FFFF99"><a href="ymsgr:SendIM?WafaTVSurabaya"><img border=0 src="http://opi.yahoo.com/online?u=WafaTVSurabaya&m=g&t=2" /></a></td>
        </tr>
      </table></td>
      </tr>
    </table>
  <p>&nbsp;</p>
  <p>
  </p>
</div>
</div>
