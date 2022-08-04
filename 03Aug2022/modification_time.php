<?php
// ini_set("date.timezone","Asia'/Dhaka");
$file = "mytext.txt";
$f_creation = filectime($file);
$accecs_file = fileatime($file);
$modify_file = filemtime($file);


echo "file creation time ". date ("h:i:s",$f_creation),"<br>";
echo "file access time ". date ("h:i:s",$accecs_file),"<br>";
echo "file modify time ". date ("h:i:s",$modify_file),"<br>";



?>