<?php
require_once "header.php";
?>
<div id='about-wrapper' class="text-center">
	<div class='container' id='about-main'>
		<div class='row'>
			<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 about-main-content'>
				<h1><?php output("whatWeDo"); ?></h1>
				<h3><?php output("whatWeDo_subHead"); ?></h3>
				<img class='img-responsive' src='images/sunsettrees.jpg'>
				<p class="text-left"><?php output("whatWeDo_content1"); ?></p>
				<p class="text-left"><?php output("whatWeDo_content2"); ?></p>
			</div>
			<div class='col-lg-4 col-md-6 col-sm-6 col-xs-12 about-main-content'>
				<h1><?php output("whatWeSolve"); ?></h1>
				<h3><?php output("whatWeSolve_subhead"); ?></h3>
				<img class='img-responsive' src='images/sunsettrees.jpg'>
				<p class="text-left"><?php output("whatWeSolve_content"); ?></p>
			</div>
			<div class='col-lg-4 col-md-12 col-sm-12 col-xs-12 about-main-content' id='third-about'>
				<h1><?php output("whatWeDelivery"); ?></h1>
				<h3><?php output("whatWeDelivery_subHead"); ?></h3>
				<img class='img-responsive' src='images/sunsettrees.jpg'>
				<p class="text-left"><?php output("whatWeDelivery_content"); ?></p>
				<ul class="text-left">
					<?php output("whatWeDelivery_content_list"); ?>
				</ul>
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
<?php
require_once "footer.php";
?>