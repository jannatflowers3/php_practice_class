<?php
$file = "F:\xampp\htdocs\MY_php_Code/php_evidence_and_solution_r51.docx";
$bytes = filename($file);
$kb = round($bytes/1024,2);
$filename = basename($file);
echo "my files name is $filename and its size is in byte $bytes in kilobyes is $kb";
?>