<?php

$food = array("pasta","steak","food","potatoes","burger","pizza","lachi","steak");
$food = preg_grep("/(pas)/",$food); //grouping golo dekhai  same name ar 

print_r($food);
echo "<br>";
$foods = array("pasta", "steak", "fish", "potatoes");
$foods = preg_grep("/^p/",$foods);
print_r($foods);


echo "<br>";
$foodalla = array("pasta", "steak", "fish", "potatoes");
$foodalla = preg_grep("/[^0-9]/",$foodalla);
print_r($foodalla);

// 0-9 dile all array r value show korebe
?>