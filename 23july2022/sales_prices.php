<?php
// function salesprices($cost,$trans){
//     $total = $cost +($cost * $trans/100);
//     return $total;

// }
// echo salesprices(100,15);

// $x = 200;
// $y = 15;
// echo salesprices($x,$y)
?>
<?php
function salesprices($cost,$trans=5){
    $total = $cost +($cost * $trans/100);
    return $total;

}
// echo salesprices(100,15);

$x = 200;
$y = 15;

echo salesprices($x,$y);

?>