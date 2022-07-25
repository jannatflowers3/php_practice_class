<?php
$file = file("user.txt");
// echo "<pre>";
// // var_dump($file);
// print_r($file);

foreach ($file as $user){
    list ($name1,$name2,$name3) = explode("|",$user);
    // echo "first name :$name1 <br>". "second name: $name2 <br>"."third name: $name3";
    echo "name :$name1 <br>";
    echo "name : $name2 <br>";
    echo "name : $name3 <br>";
    echo "<hr>";
}
?>