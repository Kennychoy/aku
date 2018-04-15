<?php

function get_header($title){
	echo <<<EDO
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>{$title} | AKU HOLDINGS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" href="images/logo_favicon.ico" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="JS/menuindicator.js"></script>
<script>
$(document).ready(function(){
	$('#back-top').css("display", "none");

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
             $('#back-top').fadeIn();
        } else {
             $('#back-top').fadeOut();
           }
       });
       $('#back-top').click(function () {
           $("html, body").animate({
               scrollTop: 0
           }, 600);
           return false;
       });
	   
	   menuIndicator();
});	
</script>
</head>
<body>
	<div id="top">
	<nav class='navbar navbar-default navbar-fixed-top'>
		<div class="container">
			<div class="row">
				<div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<a class='narbar-brand' href="index.php">
						<img src="images/logo3.png">
					</a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9" id="menubar">
					<ul class='nav navbar-nav navbar-right'>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="reference.php">Reference</a></li>
						<li><a href="associate.php">Associate</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div id='select-menu' class='col-xs-12'>
					<select onchange="location = this.value;">
						<option value="#">Navigate to...</option>
						<option value="index.php">Home</option>
						<option value="about.php">About</option>
						<option value="products.php">Products</option>
						<option value="reference.php">Reference</option>
						<option value="associate.php">Associate</option>
						<option value="contact.php">Contact</option>
					</select>
				</div>
			</div>
		</div>
	</nav>
</div>
EDO;
}
?>