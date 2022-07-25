<?php

$division = array("dhaks","khulna","cumilla");
echo "<pre>";
print_r($division);
array_unshift($division,"Rajshahi","chittagong");
print_r($division);
array_pop($division);
echo "applied array pop for remove form ending";
print_r($division);

array_shift($division);
echo "applied array_shift for remove form begining";
print_r($division);
array_push($division,"sylhet","barishal");
echo "applied array_shift for add form ebdubg";
print_r($division);

?>