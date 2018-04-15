<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
if(isset($_GET["lang"])){
	$suffix = "?lang=" . $_GET["lang"];
} else {
	$suffix = "";
}

$title = ucfirst(basename($_SERVER['REQUEST_URI'], ".php"));
$title = str_replace(".php?lang=en", "", $title);
$title = str_replace(".php?lang=zh", "", $title);
str_replace("?lang=en", "", $title);
str_replace("?lang=zh", "", $title);
if ($title == "Index" || $title == "Kenny") {
	$title = "Home";
}
if ($title == "Material" || $title == "Solution" || $title == "Accessories") {
	$dirPath = "../";
	$imgPath = "../images/";
} else {
	$dirPath = "";
	$imgPath = "images/";
}

if(isset($_GET["lang"])){
	if ($_GET["lang"] == "zh"){
		if ($title == "Home" || $title == ""){
			$title = "主頁";
		} elseif ($title == "About") {
			$title = "關於我們";
		} elseif ($title == "Products") {
			$title = "產品";
		} elseif ($title == "Reference"){
			$title = "參考";
		} elseif ($title == "Associate"){
			$title = "加入我們";
		} elseif ($title == "Contact"){
			$title = "聯絡我們";
		} elseif ($title == "Material") {
			$title = "物料";
		} elseif ($title == "Solution"){
			$title = "方案";
		} elseif ($title == "Accessories"){
			$title = "配件";
		}
	}
}

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
			$filePath = $path . lcfirst(str_replace(" ", "", $value["en"])) . ".php" . $suffix;
			echo "<li><a href='{$filePath}'>" . $value[$_GET["lang"]] . "</a></li>";
		} else {
			$suffix = "?lang=en";
			$filePath = $path . lcfirst(str_replace(" ", "", $value["en"])) . ".php" . $suffix;			
			echo "<li><a href='{$filePath}'>" . $value["en"] . "</a></li>";
		}	 
	}
	echo "</ul>";
} 

function output($value){
	if (isset($_GET["lang"])){
		$lang = $_GET["lang"];
	} else {
		$lang = "en";
	}
	GLOBAL $translation;
	echo $translation[$lang][$value];
};
?>