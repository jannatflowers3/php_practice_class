<?php

// $str1 = "Abcd";

// $tr2 = "ABCD"; //same na hole 1 output dibe 

// $str1 = "ABCD";
// $tr2 = "ABCD"; //same na hole 0 output dibe 
// echo strcmp($str1,$tr2);
// ?>
<?php

// $pswd = "supersecret";
// $swd2 = "supersecret2";

$pswd = "supersecret";
$swd2 = "supersecret";
if(strcmp($pswd,$swd2)!=0){
 echo "passwords do not match";
}
else{
    echo "password match";
}
?>