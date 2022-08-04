<?php

$file_handler = fopen("file_read.txt",'r');
echo fread($file_handler,filesize("file_read.txt"));

?>