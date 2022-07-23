<?php

$student = array("jannat"=>"cumilla","sultana"=>"chadpur");
echo <<<ABC
WE HAVE TWO STUDENTS. ONE IS JANNAT AND ANOTHER IS SULTANA;
JANNAT HOME DISTRICT IS {$student['jannat']} and sultana home districts is {$student['sultana']}
<br>; 
ABC;

$dipu ="dipu";
$rabbany = "rabbany";
echo <<<DEF
We have two student.one is dipu and another is rannany ;
dipu home distrist is$dipu and rabbany home district is $rabbany;
DEF;
?>