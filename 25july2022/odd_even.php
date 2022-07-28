<?php

// $oddnumber = array(2,5,7,9,4,6,2);
// for($i=0;$i<count($oddnumber);$i++){
//     if($oddnumber % 2 ==0){
//         echo "$oddnumber[$i].is a even number <br>";
//     }
//     else{
//         echo "$oddnumber[$i]. this is odd number <br>";
//     }
// }

$student = array(2,3,5,6,7,8);
    foreach($student as $numb){
        if($numb %2==0){
            echo "$numb . is a even number<br>";
        }
        else{
            echo "$numb . is a odd number";
        }
    }

// $oddnumber  =array(2,5,7,8,5,9,1,10);
// for($i=0;$i<count($oddnumber);$i++){
//     if($oddnumber % 2==0){
//         echo "$oddnumber[$i]. this is even numbr <br>";
//     }
//     else{
//     echo "$oddnumber[$i] .this is even number <br>";
//     }
// }


?>