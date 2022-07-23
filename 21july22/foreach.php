<?php
$students = array("php","java","javascript","python","c#");
foreach($students as $sub){
    echo "$sub is my subject <br>";
}


?>
<hr>
<h1>assosiative array</h1>
<?php
$language =array(
"php" =>"https:www.php.net",
"java" =>"ww.java.com",
"oracle" =>"www.python.com",
"c#" =>"www.asp.net"

);
foreach($language as $lang=>$site){
    echo "my language is $lang  and its si$site is  <a href=\" $site\" target=\"_blank\"> $site </a> <br>";
}

echo rand(1,100)
?>