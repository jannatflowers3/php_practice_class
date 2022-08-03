<?php
$fileloaction = "mytext.txt";
$file_open = fopen($fileloaction,"r"); //read mod a file show korbe



// print_r($file_open);
// echo fgets($file_open);

while(!feof($file_open)){
    echo fgets($file_open)."<br>";
}
fclose($file_open);

?>
<?php
$file = "mytext.txt";
$f_file = file($file);
print_r($f_file);

?>
