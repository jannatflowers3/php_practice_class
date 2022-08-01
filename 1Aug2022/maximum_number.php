<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maximum Number</h1>
    <?php

function maxnumber(){
    $number = array (22,33,66,88,22,77);
    $max  =20;
    for($i=0;$i<count($number);$i++){
        if($number[$i]>$max){
           $max = $number[$i]; 
        }
        else{
            $max = $max;
        }
    }
    return $max;
}
echo maxnumber();


// //   function maxnumber($number){
// $student = array(2,55,66,99,33);
// max($student);
 
if(isset($_POST['submit'])){
 $number = $_POST['num1'];
 $number = $_POST['num2'];
 $number = $_POST['num3'];
 $number2 = max($number);
 echo $number2;
}
?>
<form action="" method="post">
    <input type="number" name = "num1"><br>
    <input type="number" name = "num2"><br>
    <input type="number" name = "num3"><br>
 <input type="submit" name="submit" value="login">


</form>
</body>
</html>