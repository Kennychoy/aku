<?php
$myArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
shuffle($myArray);
array_chunk($myArray, 3);
$random_keys = array_rand($myArray,1);
echo $myArray[$random_keys];
?>