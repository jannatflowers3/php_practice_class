<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> array merge</h1>
<?php

$student = array("A","F","H");
$face = array("2","3","5","7");
$total = array_merge($face,$student);
echo "<pre>";
print_r( $face);
print_r($student);
print_r($total);

?>
<h1>suffle array merge</h1>
<?php
$student = array("A","F","H");
$face = array("2","3","5","7");
$total = array_merge($face,$student);
echo "<pre>";
print_r( $face);
print_r($student);
shuffle($total);
?>
</body>
</html>