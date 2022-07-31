<?php

$array1 = array("OH","CA","NY","BD");
$array2 = array("oh","ch","NY","IA","CS");
$array3 = array("EX","MD","HI","CA");
$DIF = array_diff($array1,$array2,$array3);
print_r($DIF);

?>