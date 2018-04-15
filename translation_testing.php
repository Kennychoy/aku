<?php
require_once "translation.php";
/*
$fruit = array(
	"orange" => array("en"=>"orange", "zh"=>"香橙"),
	"apple" => array("en"=>"apple", "zh"=>"蘋果")
);

echo $fruit["orange"]["zh"];
*/
function yes(){
	return "content";
}
$para = "beginning{yes()}ending";
/* eval("\$para = \"$para\";"); */

$string = "wefj woefij wfjoi {$var('about')}wefjowef wefoi wfiowfe";
echo $string;
?>