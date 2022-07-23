<?php
$student = array("jannat","sultaqna","aklima","bipasha");
// echo count($student);

for($x = 0;$x < count($student);$x++){
 if($student[$x]=="aklima"){
continue;
 }
 echo $student[$x]."<br>";
}

?>