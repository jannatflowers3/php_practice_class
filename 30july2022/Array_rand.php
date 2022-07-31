<?php
$country = array
("bangladesh"=>"dhaka",
"srilanka"=>"colombo","
australia"=>"sydney",
"nepal"=>"kathmundu");
$random = array_rand($country,2);
print_r($random);

?>