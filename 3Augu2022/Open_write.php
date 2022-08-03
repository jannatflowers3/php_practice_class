<?php
$fileloaction = "open_write.txt";
// $file_open = fopen($fileloaction,"r"); //read mod a file show korbe

$file_open = fopen($fileloaction,"w"); //write mode 
fwrite($file_open,"I want to write something \n");
fwrite($file_open,"I want to write something \n");

fwrite($file_open,"I want to write something\n");
// fwrite($file_open,"I want to write something");

$fileloaction = file($fileloaction);
print_r($fileloaction);
fclose($file_open);

?>
