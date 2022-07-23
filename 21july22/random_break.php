
<?php

// echo rand(1,50);
// $number = array(5,15,20,30);
// echo $random = rand(1,50);
// echo "<br>";
// echo in_array($random , $number);
//  number ta in arrray r modhe ase kina ta check kore
?>

<?php
$prime = array(2,3,5,7,9,11,13,117,19,29,31,29,41,43);


for($i=1;$i<100;$i++){
 
    echo "<h4>$i</h4>";
    $random = rand(1,50);
    if( in_array($random,$prime)){
  echo "found my number $random";
  break;
    }else{
 echo "not found  $random";
 
    }
    echo "<br> end";
}
?>