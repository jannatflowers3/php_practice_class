<?php
$players = array();
$players[] = array("tamim","sakib","rahim");
$players[]=array("sangakara","dilshan","mahela");
$players[]= array("smith","maxwell","warner");
echo "<pre>";
print_r($players);
foreach( $players as $player){
foreach($player as $pl){
    // echo $pl. "&nbsp";
    echo $pl ." ,";
    
}
echo "<br>";
    // vprintf("plater1 :%s player2: %s player3 %s <br>",$player);
}
?>