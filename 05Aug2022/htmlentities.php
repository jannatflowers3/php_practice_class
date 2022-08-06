<?php

$string = "Rahim's amount &copy is bigger >than Karim's";

echo htmlentities($string,ENT_QUOTES);
 //ENT_QUOTES J:  Convert both double and single quotes

// ENT_NOQUOTES : Ignore both double and single quotes

// ENT_COMPAT : Convert double quotes and ignore single quotes. This is the default
?>