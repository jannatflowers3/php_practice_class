<?php
$famus = array("Bogura"=>"Cart","Cumilla"=>"malai","sylhet"=>"Tea","Dhaka"=>"Bakhorkhani","Rajshahi"=>"Mango");

// echo key($famus);
// next($famus);
// echo key($famus);

while($famuskey = key($famus)){
echo $famuskey."<br>";
next($famus);
}
?>
