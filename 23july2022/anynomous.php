<?php
$x = 15;
$output = function(){
    global $x;
    $x = 10;
    $x+= 100;
    echo $x."<br>";
};
$output();
echo $x;

?>