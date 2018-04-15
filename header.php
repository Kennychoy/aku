<?php 
session_start();
require_once "functions.php";
require_once "translation.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="<?php echo $dirPath; ?>css/style.css" />
<title><?php echo $title; ?> | AKU HOLDINGS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" href="<?php echo $imgPath; ?>logo_favicon.ico" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo $dirPath; ?>JS/menuindicator.js"></script>
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

/*
	if ($("html").attr("lang") == "en") {
		$(".lang a:first-child").addClass("disable-link");
	}	else {
		$(".lang a:last-child").addClass("disable-link");
	}
*/	   
	   menuIndicator();

	   /* langPath(); */


	  $(window).scroll(function() {
	    if ($(document).scrollTop() > 50 && $(document).width() > 768) {
	      $('nav').addClass('shrink');
	      $("nav .container .row").css("padding-top", "20px");
	    } else {
	      $('nav').removeClass('shrink');
	      $("nav .container .row").css("padding-top", "40px");
	    }
	  });


	if( <?php echo $_SESSION["langPreference"]; ?> == 1){
		$(".xs-lang").remove();
	}
	
	$(".xs-lang a").click(function(){
		document.write("<?php $_SESSION['langPreference'] = true;?>");
	})
});	
</script>
</head>
<body>

	<div class="visible-xs xs-lang text-center">
		<div class="xs-lang-content">
			<a href="index.php">
			<img src="<?php echo $imgPath; ?>enflag.jpg"></img>
			<span>ENG</span>
			</a>
		</div>
		<div class="xs-lang-content">
			<a href="zh/index.php">
			<img src="<?php echo $imgPath; ?>zhflag.gif"></img>
			<span>中文</span>
			</a>
		</div>
	</div>

	<div id="top" class="navbar-fixed-top">
	<nav class='navbar navbar-default navbar-fixed-top'>
		<div class="container">
			<div class="row">

			<div class="lang text-right">
				<a href="?lang=en">ENG</a>
				|
				<a href="?lang=zh">中文</a>
			</div>

				<div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<a class='narbar-brand' href="<?php echo $dirPath; ?>index.php<?php echo $suffix; ?>">
						<img src="<?php echo $imgPath; ?>logo3.png">
					</a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9" id="menubar">
					<?php getMenu(); ?>
				</div>
				<div id='select-menu' class='col-xs-12'>
					<select onchange="location = this.value;">
						<option value="#"><?php echo $navigate[$i]; ?></option>
						<option value="<?php echo $dirPath; ?>index.php<?php echo $suffix; ?>"><?php echo $home[$i]; ?></option>
						<option value="<?php echo $dirPath; ?>about.php<?php echo $suffix; ?>"><?php echo $about[$i]; ?></option>
						<option value="<?php echo $dirPath; ?>products.php<?php echo $suffix; ?>"><?php echo $products[$i]; ?></option>
						<option value="<?php echo $dirPath; ?>reference.php<?php echo $suffix; ?>"><?php echo $reference[$i]; ?></option>
						<option value="<?php echo $dirPath; ?>associate.php<?php echo $suffix; ?>"><?php echo $associate[$i]; ?></option>
						<option value="<?php echo $dirPath; ?>contact.php<?php echo $suffix; ?>"><?php echo $contact[$i]; ?></option>
					</select>
				</div>
			</div>
		</div>
	</nav>
</div>