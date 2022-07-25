<?php

$oddnumber = array(2,5,7,9,4,6,2);
for($i=0;$i<count($oddnumber);$i++){
    if($oddnumber % 2 ==0){
        echo "$oddnumber[$i].is a even number <br>";
    }
    else{
        echo "$oddnumber[$i]. this is odd number <br>";
    }
}


// $number = array(5,3,9,6,3);
// foreach($number as $num){
//     if($num % 2==0){
//         echo "$num  this is even number <br>";
//     }
//     else{
//         echo "$num this is odd number<br>";
//     }
// }
?>