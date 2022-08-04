<?php

ini_set("date.timezone","Asia/Dhaka");
// echo fileatime($file);
$file = "mybasefile.txt";
$time = fileatime($file);
echo date("h:i:s",$time); 

?>