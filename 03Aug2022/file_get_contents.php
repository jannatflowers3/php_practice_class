<?php

$data = file_get_contents("file_get_content.txt");
// echo ($data);
// print ($data);
$contents = explode(" \n ",$data);
foreach ($contents as $content){
    echo $content."<br>";
}
?>