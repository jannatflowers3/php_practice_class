<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Prime Number </h1>
<?php
function prime($n){
    if($n==1){
        return $n."this is not a prime numbr";
    }
    else if($n==2){
        return $n."this is a prime number";
    }
    else{
        for($i=2;$i<$n;$i++){
            if($n%$i==0){
                return $n."this is not a prime number";
            }
        }
    }
    return $n."this is also a prime number";
}
?>
    <?php
 if(isset($_POST['submit'])){
    $n= $_POST['id'];
    echo prime($n);
 }
    ?>
    
<form action="" method="post">
    <input type="number" name="id" placeholder ="enter your prime number "><br>
    <input type="submit" name="submit" value="search">
</form>
</body>
</html>