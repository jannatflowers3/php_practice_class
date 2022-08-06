<?php

$email = "admin@gmail.com";
$string = strstr($email, "@"); //ja khojbo tar shoho tar ager likha ta bad diye dai
echo $string."<br>"; 

// @ aita bad diye trim kore ...porer gol dekhabe
 echo trim($string,"@");
 

?>