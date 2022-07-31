<?php
$a=array("red","green","blue","yellow","brown");
echo "<pre>";
print_r(array_splice($a,2));


$aindex=array("red","green","blue","yellow","brown");
echo "<pre>";
print_r(array_splice($aindex,-2));



$aindex=array("red","green","blue","yellow","brown","dhaka","rajshahi");
echo "<pre>";
print_r(array_splice($aindex,3,1));

// -2 start at teh end position fo array 

// starting psition 3, 2 is output 3 is total collect 

$distic=array("red","green","blue","yellow","brown","dhaka","rajshahi");
$subset = array_splice($distic ,3,2,array("norail","jessore"));
// echo "<pre>";
print_r($subset);
?>