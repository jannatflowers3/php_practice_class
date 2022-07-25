<?php
$players = array();
$players["bangladesh"] = array("tamim","sakib","rahim");
$players["srilanka"]=array("sangakara","dilshan","mahela");
$players["australia"]= array("smith","maxwell","warner");
echo "<pre>";
print_r($players);
foreach( $players as $countray =>$player){
    echo "<h1> $countray </h1>";

foreach($player as $pl){
    // echo $pl. "&nbsp";
    echo $pl ." ,";
    
}
echo "<br>";
    // vprintf("plater1 :%s player2: %s player3 %s <br>",$player);
}
?>