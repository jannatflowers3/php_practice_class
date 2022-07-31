<?php

$student = array("A","F","H");
$face = array("2","3","5","7");
$total = array_merge($face,$student);
echo "<pre>";
print_r( $face);
print_r($student);
print_r($total);
?>