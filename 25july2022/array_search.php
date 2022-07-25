<?php
$division = array("dhaka"=>"buriganga","sylhet"=>"surma","khulna"=>"rupsha");
$number = range(50,100);
echo array_search("surma",$division);

echo "<br>";

echo array_search(70,$number);
?>