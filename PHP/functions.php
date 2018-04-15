<?php

function get_header() {
	echo <<<EOD
	<div id="top">
	<nav class='navbar navbar-default navbar-fixed-top'>
		<div class="container">
			<div class="row">
				<div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<a class='narbar-brand' href="index.php">
						<img src="images/logo3.png">
					</a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9" id="menubar">
					<ul class='nav navbar-nav navbar-right'>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="reference.php">Reference</a></li>
						<li><a href="associate.php">Associate</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div id='select-menu' class='col-xs-12'>
					<select onchange="location = this.value;">
						<option value="#">Navigate to...</option>
						<option value="index.php">Home</option>
						<option value="about.php">About</option>
						<option value="products.php">Products</option>
						<option value="reference.php">Reference</option>
						<option value="associate.php">Associate</option>
						<option value="contact.php">Contact</option>
					</select>
				</div>
			</div>
		</div>
	</nav>
</div>
EOD;
}

function get_header_sub() {
	echo <<<EOD
	<div id="top">
	<nav class='navbar navbar-default navbar-fixed-top'>
		<div class="container">
			<div class="row">
				<div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<a class='narbar-brand' href="../index.php">
						<img src="../images/logo3.png">
					</a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9" id="menubar">
					<ul class='nav navbar-nav navbar-right'>
						<li><a href="../index.php">Home</a></li>
						<li><a href="../about.php">About</a></li>
						<li><a href="../products.php">Products</a></li>
						<li><a href="../reference.php">Reference</a></li>
						<li><a href="../associate.php">Associate</a></li>
						<li><a href="../contact.php">Contact</a></li>
					</ul>
				</div>
				<div id='select-menu' class='col-xs-12'>
					<select onchange="location = this.value;">
						<option value="#">Navigate to...</option>
						<option value="../index.php">Home</option>
						<option value="../about.php">About</option>
						<option value="../products.php">Products</option>
						<option value="../reference.php">Reference</option>
						<option value="../associate.php">Associate</option>
						<option value="../contact.php">Contact</option>
					</select>
				</div>
			</div>
		</div>
	</nav>
</div>
EOD;
}

function get_carousel() {
	echo <<<EOD
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="images/slide1.png" alt="Chania">
		</div>
		<div class="item">
			<img src="images/slide2.png" alt="Chania">
		</div>
		<div class="item">
			<img src="images/slide3.png" alt="Flower">
		</div>
		<div class="item">
			<img src="images/slide4.png" alt="Flower">
		</div>
	</div>

<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
EOD;
}

function about_content() {
	echo <<<EOD
<div id='about-wrapper'>
	<div class='container' id='about-main'>
		<div class='row'>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 about-main-content">
				<h1 class='text-center'>What We Do</h1>
				<h3 class='text-center'>Excessive noise, what can we do?</h3>
				<img src='images/sunsettrees.jpg'>
				<p>Our thoughts, behaviour and actions depend on the surroundings for our environment. Most of us would prefer to have better concentration from eliminating noisy distractions. Acoustic comfort allows us to work more effectively, or enhance our quality time during our relaxation.</p>
				<p>With innovative ideas and advanced technology supported by creative minds, AKU provides the solution with its material to inspire a wide range of applications for building an acoustic landscape, which is functional as well as being aesthetically pleasing.</p>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 about-main-content">
				<h1 class='text-center'>What We Solve</h1>
				<h3 class='text-center'>Innovative Quietness Solutions</h3>
				<img src='images/sunsettrees.jpg'>
				<p>The offering mainly comes from its range of “AKU material”, known as AKU panel and AKU felt. These acoustic materials supports the function of noise absorption and to reduce reverberation, achieving a NRC value of 0.8 (noise reduction coefficient – with 1 being total absorption). Importantly, AKU material contains mostly recycled fiber that is environmentally friendly.</p>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 about-main-content" id='third-about'>
				<h1 class='text-center'>What We Deliver</h1>
				<h3 class='text-center'>Quality & Values Delivery</h3>
				<img src='images/sunsettrees.jpg'>
				<p>Our quality and values have been delivered through:</p>
				<ul>
					<li>Recycleable Materials</li>
					<li>Creative Design</li>
					<li>Quality Construction</li>
					<li>Innovative Applications</li>
				</ul>
			</div>
		</div>
	</div>
</div>	
EOD;
}

function get_latest_news() {
	echo <<<EOD
<div id='latest-news'>
	<div class='container'>
		<div id='latest-news-title' class='text-center'>
			<h1>Latest News</h1>
		</div>
		<div class="row">
			<div class="latest-news-content col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<span>01/</span>
				<div class='latest-news-details'>
					<h4>Hong Kong International Building and Hardware Fair</h4>
					<p>Booth: 8-A02<br/>
					Date: 29 OCT - 1 NOV 2014<br/>
					Location: Asia World-Expo, Hong Kong International Airport, Lantau, Hong Kong</P>
				</div>
			</div>
		</div>
	</div>
</div>
EOD;
}

function get_more_about_us() {
	echo <<<EOD
<div id="more">
	<h4 class='text-center'>More About Us</h4>
	<div class="container">
		<div class='row'>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes">
				<div class='more-boxes-inner'>
					<a href="products.php">
					<img src='images/volcano.png'>
					<P class='text-center'>OUR PRODUCTS</p>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes">
				<div class='more-boxes-inner'>
					<a href="reference.php">
					<img src='images/volcano.png'>
					<P class='text-center'>OUR REFERENCE</p>
					</a>
				</div>
			</div>			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes">
				<div class='more-boxes-inner'>
					<a href="associate.php">
					<img src='images/volcano.png'>
					<P class='text-center'>OUR ASSOCIATE</p>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 more-boxes">
				<div class='more-boxes-inner'>
					<a href="contact.php">
					<img src='images/volcano.png'>
					<P class='text-center'>CONTACT US</p>
					</a>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12" id='hr-line'>
				<hr>
			</div>
		</div>
	</div>
</div>
EOD;
}

function get_products_content() {
	echo <<<EOD
<div id='products'>
	<div class='container'>
		<h1 class='text-center'>Our Products</h1>
		<p class='text-center'>We have provided a range of product application through AKU materials. For more information, you can check out AKU material, solutions as well accessories below.</p>
		<div class="row">
			<div class='col-lg-4 col-sm-4 col-xs-12 products-content text-center'>
				<a href="products/material.php">
					<img src="images/nightsky.jpg">
					<p class='text-center'>AKU MATERIAL</p>
				</a>
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 products-content'>
				<a href="products/solution.php">
					<img src="images/nightsky.jpg">
					<p class='text-center'>AKU SOLUTION</p>
				</a>
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 products-content'>
				<a href="products/asscessories.php">
					<img src="images/nightsky.jpg">
					<p class='text-center'>AKU ACCESSORIES</p>
				</a>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-sm-12 col-xs-12" id='hr-line'>
		<hr>
	</div>
</div>
EOD;
}

function get_material_content() {
	echo <<<EOD
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
EOD;
}

function get_solution_content() {
	echo <<<EOD
<div id='solution'>
	<div class='container'>
		<h1 class='text-center'>AKU Solution</h1>		
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
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="../images/nightsky.jpg">
			</div>
		</div>		
	</div>
</div>
EOD;
}

function get_accessories() {
	echo <<<EOD
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
EOD;
}

function get_reference_content() {
	echo <<<EOD
<div id='reference'>
	<div class='container'>
		<h1 class='text-center'>Grand Cinema</h1>		
		<div class="row">
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>			
		</div>
		<h1 class='text-center'>Home Theatre</h1>		
		<div class="row">
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>			
		</div>
		<div class="row">
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>			
		</div>	
		<h1 class='text-center'>Office Bookshelf</h1>		
		<div class="row">
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>
			<div class='col-lg-4 col-sm-4 col-xs-12 material-boxes'>
				<img src="images/nightsky.jpg">
			</div>			
		</div>		
	</div>
</div>
EOD;
}

function get_get_in_touch() {
	echo <<<EOD
<div id='get-in-touch'>
	<div class='container'>
		<h2 class='text-center'>Get in Touch</h2>
		<div class="row">
			<div class="col-sm-6 col-xs-12 get-content">
				<h3 class='text-center'>CHINA OFFICE</h3>
				<p class='text-center'>No.55 Qianqian road, Suzhou, Jiansu, China 215000</p>
				<ul class='text-center'>
					<li class='phone'>(86) 512 6736 9510</li>
					<li class='phone'>(86) 512 6736 9511</li>
					<li class='phone'>(86) 512 6736 9512</li>
					<li class='fax'>(86) 512 6736 9513</li>
				</ul>
			</div>
			<div class="col-sm-6 col-xs-12 get-content">
				<h3 class='text-center'>HK OFFICE</h3>
				<p class='text-center'>Flat 807, 8/F, Kum Fu Industrial Building, 97-103 Tai Chuen Ping Street, Kwai Chung,Hong Kong</p>
				<ul class='text-center'>
					<li class='phone'>(852) 2954 5082</li>
					<li class='fax'>(852) 2954 5083</li>
				</ul>
			</div>
		</div>
	</div>
</div>
EOD;
}

// more about us, special for the page "contact"
function get_more() {
	echo <<<EOD
<div id="more">
	<h4 class='text-center'>More About Us</h4>
	<div class="container">
		<div class='row'>
			<div class="col-sm-4 col-xs-12 get-boxes">
				<div class='more-boxes-inner'>
					<a href="products.php">
					<img src='images/volcano.png'>
					<P class='text-center'>OUR PRODUCTS</p>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 get-boxes">
				<div class='more-boxes-inner'>
					<a href="reference.php">
					<img src='images/volcano.png'>
					<P class='text-center'>OUR REFERENCE</p>
					</a>
				</div>
			</div>			
			<div class="col-sm-4 col-xs-12 get-boxes">
				<div class='more-boxes-inner'>
					<a href="associate.php">
					<img src='images/volcano.png'>
					<P class='text-center'>OUR ASSOCIATE</p>
					</a>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12" id='hr-line'>
				<hr>
			</div>
		</div>
	</div>
</div>
EOD;
}

function get_connection_with_us() {
	echo <<<EOD
<div id='connect'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
				<h4>Connection With Us</h4>
				<p>Interested in our products but still have quesitons? </br>Why not contact us now?</p>
				<span class="glyphicon glyphicon-envelope"></span>
			</div>
		</div>
	</div>
</div>
EOD;
}

function get_associate_message() {
	echo <<<EOD
<div id='associate' class='text-center'>
	<h2>Many are coming on board.</h2>
</div>
EOD;
}

function get_map() {
	echo <<<EOD
<div id='map'>
	<img src="images/map_marker.png">
	<p>Flt 807, 8/F, Kum fu Industrial Building, <br/>97-103 Tai chuen Ping Street, Kwai Chung, Hong Kong</p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3689.6129437790028!2d114.13827319999999!3d22.3682391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2shk!4v1413796654477" style="border:0"></iframe>
</div>
EOD;
}

function get_map_sub() {
	echo <<<EOD
<div id='map'>
	<img src="../images/map_marker.png">
	<p>Flt 807, 8/F, Kum fu Industrial Building, <br/>97-103 Tai chuen Ping Street, Kwai Chung, Hong Kong</p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3689.6129437790028!2d114.13827319999999!3d22.3682391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2shk!4v1413796654477" style="border:0"></iframe>
</div>
EOD;
}

function get_footer(){
echo <<<EOD
<footer>
AKU HOLDINGS &copy; ${!${''} = date('Y')} • ALL RIGHTS RESERVED
</footer>
EOD;
}

function get_back_top(){
echo <<<EOD
<div id='back-top' class='text-center'>
	<span><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
</div>
EOD;
}
?>