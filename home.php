<?php
session_start();
if(isset($_GET["lang"])){
	$_SESSION["lang"] = $_GET["lang"];
} else {
	$_SESSION["lang"] = "en";
}
header("Location: index.php?lang={$_SESSION["lang"]}");
exit();
?>

