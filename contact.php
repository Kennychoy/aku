<?php require_once "header.php"; ?>

<div id='get-in-touch'>
	<div class='container'>
		<h2 class='text-center'><?php output("getInTouch"); ?></h2>
		<div class='row'>
			<div class='col-sm-6 col-xs-12 get-content'>
				<h3 class='text-center'><?php output("chinaOffice"); ?></h3>
				<p class='text-center'><?php output("chinaAddress"); ?></p>
				<ul class='text-center'>
					<li class='phone'>(86) 512 6736 9510</li>
					<li class='phone'>(86) 512 6736 9511</li>
					<li class='phone'>(86) 512 6736 9512</li>
					<li class='fax'>(86) 512 6736 9513</li>
				</ul>
			</div>
			<div class='col-sm-6 col-xs-12 get-content'>
				<h3 class='text-center'><?php output("hkOffice"); ?></h3>
				<p class='text-center'><?php output("hkAddress"); ?></p>
				<ul class='text-center'>
					<li class='phone'>(852) 2954 5082</li>
					<li class='fax'>(852) 2954 5083</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id='more'>
	<h4 class='text-center'><?php output("moreAboutUs"); ?></h4>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-4 col-xs-12 get-boxes'>
				<div class='more-boxes-inner'>
					<a href='products.php{$suffix}'>
					<img class='img-responsive' src='images/volcano.png'>
					<P class='text-center'><?php output("ourProducts"); ?></p>
					</a>
				</div>
			</div>
			<div class='col-sm-4 col-xs-12 get-boxes'>
				<div class='more-boxes-inner'>
					<a href='reference.php'>
					<img class='img-responsive' src='images/volcano.png'>
					<P class='text-center'><?php output("ourReference"); ?></p>
					</a>
				</div>
			</div>			
			<div class='col-sm-4 col-xs-12 get-boxes'>
				<div class='more-boxes-inner'>
					<a href='associate.php'>
					<img class='img-responsive' src='images/volcano.png'>
					<P class='text-center'><?php output("ourAssociate"); ?></p>
					</a>
				</div>
			</div>
			<div class='col-lg-12 col-sm-12 col-xs-12' id='hr-line'>
				<hr>
			</div>
		</div>
	</div>
</div>

<?php require_once "footer.php"; ?>