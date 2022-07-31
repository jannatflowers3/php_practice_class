<?php
$a=array("red","green","blue","yellow","brown");
echo "<pre>";
print_r(array_slice($a,2));


$aindex=array("red","green","blue","yellow","brown");
echo "<pre>";
print_r(array_slice($aindex,-2));
// total length -  -2 

$aindex=array("red","green","blue","yellow","brown","dhaka","rajshahi");
echo "<pre>";
print_r(array_slice($aindex,3,2));

// -2 start at teh end position fo array  3, 2 is output 3 is starating position
?>