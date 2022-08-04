<?php
$pattern = "vun us tge greatest word processor ever greatest created oh vim";
echo preg_match("/bus\b/",$pattern);
echo preg_match_all("/\bprocessor\b/i",$pattern,$match);
echo preg_match_all("/greatest/i",$pattern,$match2);

print_r($match);

print_r($match2);


?>