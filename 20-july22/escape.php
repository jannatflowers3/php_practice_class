<?php
$output = "This is one line  \r and this is another line <br>";
echo $output;
$output1 = 'This is  two line . \n and this is another lilne <br>';
$output2 ='tgus is one line'."\n".'and this is another line.<br>';
//  echo "<br>";
echo $output1;
echo $output2;
echo "<pre>";
?>

<?php
$student = array("jannat"=>"barisal","sultana"=>"chadpur");
// echo $student['jannat'];
echo "this is jannatul addredss "  . $student['jannat']."<br>";
echo " this is sultana address {$student['sultana']}";
?>