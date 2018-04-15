<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<title> | AKU HOLDINGS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
})
</script>
<style>
</style>
</head>
<body>
<?php
function getMenu(){
	$menuArray = array(
	array("en"=>"Home", "zh"=>"主頁"),
	array("en"=>"About", "zh"=>"關於我們"),	
	array("en"=>"Products", "zh"=>"產品"),
	array("en"=>"Reference", "zh"=>"參考"),
	array("en"=>"Associate", "zh"=>"加入我們"),
	array("en"=>"Contact", "zh"=>"聯絡我們")
	);
	echo "<ul class='nav navbar-nav navbar-right'>";
	foreach($menuArray as $key=>$value){
		$filename = ucfirst(basename($_SERVER['REQUEST_URI'], ".php"));
		$filename = str_replace("?lang=en", "", $filename);
		$filename = str_replace("?lang=zh", "", $filename);
		$filename = str_replace(".php", "", $filename);
		if($filename == "Material" || $filename == "Solution" || $filename == "Accessories"){
			$path = "../";
		} else {
			$path = "";
		}
		if(isset($_GET["lang"])){
			$suffix = "?lang=" . $_GET["lang"];
			$filePath = $path . str_replace(" ", "", $value["en"]) . ".php" . $suffix;
			echo "<li><a href='{$filePath}'>" . $value[$_GET["lang"]] . "</a></li>";
		} else {
			$suffix = "?lang=en";
			$filePath = $path . str_replace(" ", "", $value["en"]) . ".php" . $suffix;			
			echo "<li><a href='{$filePath}'>" . $value["en"] . "</a></li>";
		}	 
	}
	echo "</ul>";
} 

?>

</body>
</html>