<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title>Home | AKU HOLDINGS</title>
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
<?php 
	require_once "PHP/functions.php";
?>
</head>
<body>

<?php 
get_header(); 
?>

<!-- beginning of the slides -->
<?php
get_carousel();
?>

<!-- Latest news -->
<?php
get_latest_news();
?>

<!-- More About Us -->
<?php
get_more_about_us();
?>

<!-- Connection with us -->
<?php 
get_connection_with_us();
?>

<!-- map -->
<?php
get_map();
?>

<!-- footer -->
<?php 
get_footer();
?>

<!-- back-to-top button -->
<?php
get_back_top();
?>
</body>
</html>