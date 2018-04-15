<?php

require_once "header.php"; 
?>

<div id='products'>
	<div class='container'>
		<h1 class='text-center'><?php output("ourProducts"); ?></h1>
		<p class='text-center'><?php output("productsPageDescription"); ?></p>
		<div class='row'>
			<div class='col-lg-4 col-sm-4 col-xs-12 products-content text-center'>
				<a href='products/material.php<?php echo $suffix ?>'>
					<img class='img-responsive' src='images/nightsky.jpg'>
					<p class='text-center'><?php output("akuMaterial"); ?></p>
				</a>
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 products-content'>
				<a href='products/solution.php<?php echo $suffix ?>'>
					<img class='img-responsive' src='images/nightsky.jpg'>
					<p class='text-center'><?php output("akuSolution"); ?></p>
				</a>
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 products-content'>
				<a href='products/accessories.php<?php echo $suffix ?>'>
					<img class='img-responsive' src='images/nightsky.jpg'>
					<p class='text-center'><?php output("akuAccesssories"); ?></p>
				</a>
			</div>
		</div>
	</div>
	<div class='col-lg-12 col-sm-12 col-xs-12' id='hr-line'>
		<hr>
	</div>
</div>

<?php require_once "footer.php"; ?>