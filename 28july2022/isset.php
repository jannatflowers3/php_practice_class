<?php

$x =8;
echo isset($x);
$_POST['submit']= "";
echo  isset($_POST['submit']);
$X= 0;
while($X<=10){
    if($X<=5){
        continue;
    }
}
print $X;
$i = $X++;
print $i;
?>