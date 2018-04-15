<?php
// Please use title name as parameter, such as Home, About, Contact, etc
require_once "../PHP/get_header_sub.php";
get_header_sub("Products");
?>

<div id='accessories'>
	<div class='container'>
		<h1 class='text-center'>AKU Accessories</h1>		
		<div class="row">
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="../images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="../images/nightsky.jpg">					
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="../images/nightsky.jpg">
			</div>
		</div>
		<div class="row">
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="../images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="../images/nightsky.jpg">
			</div>
		</div>		
	</div>
</div>

<?php
require_once "../PHP/get_footer_sub.php";
echo $footer_sub;

?>