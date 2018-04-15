<?php require_once "header.php"; ?>

<div id='myCarousel' class='carousel slide' data-ride='carousel'>
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
			<h1><?php output("latestNews"); ?></h1>
		</div>
		<div class='row'>
			<div class='latest-news-content col-lg-6 col-md-6 col-sm-6 col-xs-12'>
				<span>01/</span>
				<div class='latest-news-details'>
					<h4><?php output("eventName"); ?></h4>
					<p><?php output("eventLocation"); ?></P>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- More About Us -->
<div id='more' class='text-center'>
	<h4><?php output("moreAboutUs"); ?></h4>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes'>
				<div class='more-boxes-inner'>
					<a href='products.php'>
					<img class='img-responsive' src='images/volcano.png'>
					<P><?php output("ourProducts"); ?></p>
					</a>
				</div>
			</div>
			<div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes'>
				<div class='more-boxes-inner'>
					<a href='reference.php'>
					<img class='img-responsive' src='images/volcano.png'>
					<P><?php output("ourReference"); ?></p>
					</a>
				</div>
			</div>			
			<div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes'>
				<div class='more-boxes-inner'>
					<a href='associate.php'>
					<img class='img-responsive' src='images/volcano.png'>
					<P><?php output("ourAssociate"); ?></p>
					</a>
				</div>
			</div>
			<div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes'>
				<div class='more-boxes-inner'>
					<a href='contact.php'>
					<img class='img-responsive' src='images/volcano.png'>
					<P><?php output("contact"); ?></p>
					</a>
				</div>
			</div>
			<div class='col-lg-12 col-sm-12 col-xs-12' id='hr-line'>
				<hr>
			</div>
		</div>
	</div>
</div>
<?php require_once "{$dirPath}footer.php"; ?>