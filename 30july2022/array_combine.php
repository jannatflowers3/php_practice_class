<?php
$student = array("DH","CO","NO","GO");
$distic =  array("Dhaka","comilla","Noakhali","Barisal");
$result = array_combine($student,$distic);
echo "<pre>";
print_r($result);

?>