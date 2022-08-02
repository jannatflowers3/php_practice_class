<?php
$pathfile = "F:\xampp\htdocs\MY_php_Code\2august2022\mybasefile.txt";
// $output1 = dirname($pathfile);

$output1 = pathinfo($pathfile);
echo "<pre>";
// output without extention
echo $output1['dirname'];

echo "<br>";
echo $output1['basename'];

echo "<br>";
echo $output1['filename'];

echo "<br>";


?>