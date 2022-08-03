<?php

$file = "address_email.txt";
$data = file($file);
// print_r($data);
foreach($data as $datas){
    // echo $data ."<br>";
    list($name, $email)=explode(" ","$datas");
    // echo "this is name $name<br>";
    echo "<a href=\"$email\">$name</a> <br>";
}


?>