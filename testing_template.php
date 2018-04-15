<?php 
session_start();
$title = ucfirst(basename($_SERVER['REQUEST_URI'], ".php"));
if ($title == "Index") {
	$title = "Home";
}
if ($title == "Material" || $title == "Solution" || $title == "Accessories") {
	$dirPath = "../";
	$imgPath = "../images/";
} else {
	$dirPath = "";
	$imgPath = "images/";
}

$template = array("en" => "<!DOCTYPE html>
<html lang='en'>
<head>
<link type='text/css' rel='stylesheet' href='<?php echo $dirPath; ?>css/style.css' />
<title><?php echo $title; ?> | AKU HOLDINGS</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta charset='utf-8'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='shortcut icon' href='<?php echo $imgPath; ?>logo_favicon.ico' />
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='<?php echo $dirPath; ?>JS/menuindicator.js'></script>
<script>
$(document).ready(function(){
	$('#back-top').css('display', 'none');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
             $('#back-top').fadeIn();
        } else {
             $('#back-top').fadeOut();
           }
       });
       $('#back-top').click(function () {
           $('html, body').animate({
               scrollTop: 0
           }, 600);
           return false;
       });
	   
	   menuIndicator();
	
	/*if ($('html').attr('lang') == 'en') {
		$('.lang a:first-child').addClass('disable-link');
	}	else {
		$('.lang a:last-child').addClass('disable-link');
	}
	
	langPath(); */
	
	if( <?php echo $_SESSION['langPreference']; ?> == 1){
		$('.xs-lang').remove();
	}
	
	$('.xs-lang a').click(function(){
		document.write('<?php $_SESSION['langPreference'] = true;?>');
	})
});	
</script>
</head>

<body>
	<div class='visible-xs xs-lang text-center'>
		<div class='xs-lang-content'>
			<a href='index.php'>
			<img src='images/enflag.jpg'></img>
			<span>ENG</span>
			</a>
		</div>
		<div class='xs-lang-content'>
			<a href='zh/index.php'>
			<img src='images/zhflag.gif'></img>
			<span>繁中</span>
			</a>
		</div>
	</div>
	
	<div id='top'>
		<nav class='navbar navbar-default navbar-fixed-top'>
			<div class='container'>
				<div class='row'>
					<div class='lang text-right'>
						<a href='?lang=en'>ENG</a>
						|
						<a href='?lang=zh'>中文</a>
					</div>
					<div class='navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12'>
						<a class='narbar-brand' href='index.php'>
							<img src='<?php echo $imgPath; ?>logo3.png'>
						</a>
					</div>
					<div class='col-lg-9 col-md-9 col-sm-9' id='menubar'>
						<ul class='nav navbar-nav navbar-right'>
							<li><a href='<?php echo $dirPath; ?>index.php'>Home</a></li>
							<li><a href='<?php echo $dirPath; ?>about.php'>About</a></li>
							<li><a href='<?php echo $dirPath; ?>products.php'>Products</a></li>
							<li><a href='<?php echo $dirPath; ?>reference.php'>Reference</a></li>
							<li><a href='<?php echo $dirPath; ?>associate.php'>Associate</a></li>
							<li><a href='<?php echo $dirPath; ?>contact.php'>Contact</a></li>
						</ul>
					</div>

					<div id='select-menu' class='col-xs-12'>
						<select onchange='location = this.value;'>
							<option value='#'>Navigate to...</option>
							<option value='<?php echo $dirPath; ?>index.php'>Home</option>
							<option value='<?php echo $dirPath; ?>about.php'>About</option>
							<option value='<?php echo $dirPath; ?>products.php'>Products</option>
							<option value='<?php echo $dirPath; ?>reference.php'>Reference</option>
							<option value='<?php echo $dirPath; ?>associate.php'>Associate</option>
							<option value='<?php echo $dirPath; ?>contact.php'>Contact</option>
						</select>
					</div>
				</div>
			</div>
		</nav>
	</div>

<?php echo $content; ?>


<div id='connect'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
				<h4>Connection With Us</h4>
				<p>Interested in our products but still have quesitons? </br>Why not contact us now?</p>
				<span class='glyphicon glyphicon-envelope'></span>
			</div>
		</div>
	</div>
</div>


<div id='map'>
	<img src='<?php echo $imgPath; ?>map_marker.png'>
	<p>Flt 807, 8/F, Kum fu Industrial Building, <br/>97-103 Tai chuen Ping Street, Kwai Chung, Hong Kong</p>
	<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3689.6129437790028!2d114.13827319999999!3d22.3682391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2shk!4v1413796654477' style='border:0'></iframe>
</div>


<footer>
AKU HOLDINGS &copy; <?php echo '${!${''} = date('Y')}'; ?> &#149; ALL RIGHTS RESERVED
</footer>
</body>
</html>

<div id='back-top' class='text-center'>
	<span><i class='fa fa-chevron-up' aria-hidden='true'></i></span>
</div>", 
"zh" => "<!DOCTYPE html>
<html lang='en'>
<head>
<link type='text/css' rel='stylesheet' href='<?php echo $dirPath; ?>css/style.css' />
<title><?php echo $title; ?> | AKU HOLDINGS</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta charset='utf-8'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='shortcut icon' href='<?php echo $imgPath; ?>logo_favicon.ico' />
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='<?php echo $dirPath; ?>JS/menuindicator.js'></script>
<script>
$(document).ready(function(){
	$('#back-top').css('display', 'none');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
             $('#back-top').fadeIn();
        } else {
             $('#back-top').fadeOut();
           }
       });
       $('#back-top').click(function () {
           $('html, body').animate({
               scrollTop: 0
           }, 600);
           return false;
       });
	   
	   menuIndicator();
	
	/*if ($('html').attr('lang') == 'en') {
		$('.lang a:first-child').addClass('disable-link');
	}	else {
		$('.lang a:last-child').addClass('disable-link');
	}
	
	langPath(); */
	
	if( <?php echo $_SESSION['langPreference']; ?> == 1){
		$('.xs-lang').remove();
	}
	
	$('.xs-lang a').click(function(){
		document.write('<?php $_SESSION['langPreference'] = true;?>');
	})
});	
</script>
</head>

<body>
	<div class='visible-xs xs-lang text-center'>
		<div class='xs-lang-content'>
			<a href='index.php'>
			<img src='images/enflag.jpg'></img>
			<span>ENG</span>
			</a>
		</div>
		<div class='xs-lang-content'>
			<a href='zh/index.php'>
			<img src='images/zhflag.gif'></img>
			<span>繁中</span>
			</a>
		</div>
	</div>
	
	<div id='top'>
		<nav class='navbar navbar-default navbar-fixed-top'>
			<div class='container'>
				<div class='row'>
					<div class='lang text-right'>
						<a href='?lang=en'>ENG</a>
						|
						<a href='?lang=zh'>中文</a>
					</div>
					<div class='navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12'>
						<a class='narbar-brand' href='index.php'>
							<img src='<?php echo $imgPath; ?>logo3.png'>
						</a>
					</div>
					<div class='col-lg-9 col-md-9 col-sm-9' id='menubar'>
						<ul class='nav navbar-nav navbar-right'>
							<li><a href='<?php echo $dirPath; ?>index.php'>首頁</a></li>
							<li><a href='<?php echo $dirPath; ?>about.php'>About</a></li>
							<li><a href='<?php echo $dirPath; ?>products.php'>Products</a></li>
							<li><a href='<?php echo $dirPath; ?>reference.php'>Reference</a></li>
							<li><a href='<?php echo $dirPath; ?>associate.php'>Associate</a></li>
							<li><a href='<?php echo $dirPath; ?>contact.php'>Contact</a></li>
						</ul>
					</div>

					<div id='select-menu' class='col-xs-12'>
						<select onchange='location = this.value;'>
							<option value='#'>Navigate to...</option>
							<option value='<?php echo $dirPath; ?>index.php'>Home</option>
							<option value='<?php echo $dirPath; ?>about.php'>About</option>
							<option value='<?php echo $dirPath; ?>products.php'>Products</option>
							<option value='<?php echo $dirPath; ?>reference.php'>Reference</option>
							<option value='<?php echo $dirPath; ?>associate.php'>Associate</option>
							<option value='<?php echo $dirPath; ?>contact.php'>Contact</option>
						</select>
					</div>
				</div>
			</div>
		</nav>
	</div>

<?php echo $content; ?>


<div id='connect'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
				<h4>Connection With Us</h4>
				<p>Interested in our products but still have quesitons? </br>Why not contact us now?</p>
				<span class='glyphicon glyphicon-envelope'></span>
			</div>
		</div>
	</div>
</div>


<div id='map'>
	<img src='<?php echo $imgPath; ?>map_marker.png'>
	<p>Flt 807, 8/F, Kum fu Industrial Building, <br/>97-103 Tai chuen Ping Street, Kwai Chung, Hong Kong</p>
	<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3689.6129437790028!2d114.13827319999999!3d22.3682391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2shk!4v1413796654477' style='border:0'></iframe>
</div>


<footer>
AKU HOLDINGS &copy; <?php echo '${!${''} = date('Y')}'; ?> &#149; ALL RIGHTS RESERVED
</footer>
</body>
</html>

<div id='back-top' class='text-center'>
	<span><i class='fa fa-chevron-up' aria-hidden='true'></i></span>
</div>')";
?>