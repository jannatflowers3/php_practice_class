<?php
$famus = array("Bogura"=>"Cart","Cumilla"=>"malai","sylhet"=>"Tea","Dhaka"=>"Bakhorkhani","Rajshahi"=>"Mango");

// echo key($famus);
// next($famus);
// echo key($famus);
// key diye index ar key dekhai 
// current diye index ar  vlue golo show korebe

while($famusvalue = current($famus)){
echo $famusvalue."<br>";
next($famus);
}
?>