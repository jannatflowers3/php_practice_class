<?php

// $userfinfo = "Name : <br> Jannatul fersah </b> <br> Title : <b> PHP GURU<b>";
// preg_match_all("/<b>(")


$userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
// 
echo "<br>";


print_r($pat_array);
?>