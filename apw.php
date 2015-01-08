<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/slider.css" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
</head>

<body>
<div class="flex-container">
<div class="flexslider">
		<ul class="slides">
			<li>
				<a href="#"><img src="img/slide1.jpg" /></a>
			</li>
			
			<li>
				<img src="img/slide2.jpg" />
			</li>
			
			<li>
				<img src="img/slide3.jpg" />
				<p>Designing The Well-Tempered Web</p>
			</li>
		</ul>
	</div>
</div>

<script>
$(document).ready(function () {
	$('.flexslider').flexslider({
		animation: 'fade',
		controlsContainer: '.flexslider'
	});
});
</script>
</body>
</html>