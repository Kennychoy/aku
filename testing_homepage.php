<?php

$content = array("en" => "<div id='myCarousel' class='carousel slide' data-ride='carousel'>
<!-- Wrapper for slides -->
	<div class='carousel-inner' role='listbox'>
		<div class='item active'>
			<img src='images/slide1.png' alt='Chania'>
		</div>
		<div class='item'>
			<img src='images/slide2.png' alt='Chania'>
		</div>
		<div class='item'>
			<img src='images/slide3.png' alt='Flower'>
		</div>
		<div class='item'>
			<img src='images/slide4.png' alt='Flower'>
		</div>
	</div>

<!-- Left and right controls -->
	<a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
		<span class='sr-only'>Previous</span>
	</a>
	<a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
		<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
		<span class='sr-only'>Next</span>
	</a>
</div>

<div id='latest-news'>
	<div class='container'>
		<div id='latest-news-title' class='text-center'>
			<h1>Latest News</h1>
		</div>
		<div class='row'>
			<div class='latest-news-content col-lg-6 col-md-6 col-sm-6 col-xs-12'>
				<span>01/</span>
				<div class='latest-news-details'
					<h4>Hong Kong International Building and Hardware Fair</h4>
					<p>Booth: 8-A02<br/>
					Date: 29 OCT - 1 NOV 2014<br/>
					Location: Asia World-Expo, Hong Kong International Airport, Lantau, Hong Kong</P>
				</div>
			</div>
		</div>
	</div>
</div>
", 
"zh" => "<div id='myCarousel' class='carousel slide' data-ride='carousel'>
<!-- Wrapper for slides -->
	<div class='carousel-inner' role='listbox'>
		<div class='item active'>
			<img src='images/slide1.png' alt='Chania'>
		</div>
		<div class='item'>
			<img src='images/slide2.png' alt='Chania'>
		</div>
		<div class='item'>
			<img src='images/slide3.png' alt='Flower'>
		</div>
		<div class='item'>
			<img src='images/slide4.png' alt='Flower'>
		</div>
	</div>

<!-- Left and right controls -->
	<a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
		<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
		<span class='sr-only'>Previous</span>
	</a>
	<a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
		<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
		<span class='sr-only'>Next</span>
	</a>
</div>

<div id='latest-news'>
	<div class='container'>
		<div id='latest-news-title' class='text-center'>
			<h1>Latest News</h1>
		</div>
		<div class='row'>
			<div class='latest-news-content col-lg-6 col-md-6 col-sm-6 col-xs-12'>
				<span>01/</span>
				<div class='latest-news-details'
					<h4>中文中文中文中文中文</h4>
					<p>Booth: 8-A02<br/>
					Date: 29 OCT - 1 NOV 2014<br/>
					Location: Asia World-Expo, Hong Kong International Airport, Lantau, Hong Kong</P>
				</div>
			</div>
		</div>
	</div>
</div>
");

if (isset($_GET["lang"])){
	if ($_GET["lang"] == "zh"){
		$content = $content["zh"];
		require_once "template_zh.php";
	} else {
		$content = $content["en"];
		require_once "template.php";		
	}
} else {
	$content = $content["en"];
	require_once "template.php";	
}
?>