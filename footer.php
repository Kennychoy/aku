<div id="connect">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<h4><?php output("connectHeadline"); ?></h4>
				<p><?php output("connectContent"); ?></p>
				<span class="glyphicon glyphicon-envelope"></span>
			</div>
		</div>
	</div>
</div>


<div id="map">
	<img src="<?php echo $imgPath; ?>map_marker.png">
	<p><?php output("mapAddress"); ?></p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3689.6129437790028!2d114.13827319999999!3d22.3682391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2shk!4v1413796654477" style="border:0"></iframe>
</div>

<div id="back-top" class="text-center">
	<span><i class="fa fa-chevron-up"></i></span>
</div>

<footer>
AKU HOLDINGS &copy; <?php echo "${!${''} = date('Y')}"; ?> &#149; ALL RIGHTS RESERVED
</footer>
</body>
</html>



<?php 
if(isset($_GET["lang"])){
	if ($_GET["lang"] == "zh"){
		echo "<script>$('.lang a:last-child').addClass('disable-link');</script>";
	} else {
		echo "<script>$('.lang a:first-child').addClass('disable-link');</script>";
	}
} else {
	echo "<script>$('.lang a:first-child').addClass('disable-link');</script>";
}
?>