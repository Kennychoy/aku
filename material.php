<?php
// Please use title name as parameter, such as Home, About, Contact, etc
require_once "../PHP/get_header_sub.php";
get_header_sub("Home");
?>

<div id='material-content'>
	<div class='container'>
		<h1 class='text-center'>AKU Panel</h1>		
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
			<h1 class='text-center'>AKU Felt</h1>
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