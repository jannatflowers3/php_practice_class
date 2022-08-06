<?php
$amount = 500.00;
$output = str_pad($amount,5,"0",STR_PAD_LEFT);  //5 mane total length 5 hobe ..left a 0 add hobe 
echo $output;



$string = "Bangladesh";
echo str_pad($string,10,"#=",STR_PAD_BOTH);
?>