
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .textcenter{
            text-align:center;
        }
    </style>
</head>
<body>
    
 <h1 class="textcenter"> PHP Prime Number </h1>
<form action="" method="post">
    <input type="text" name="primenum" placeholder="enter your number">
    <input type="submit" name = "submit" value ="submit">
</form>

    <?php


if(isset($_POST['submit'])){

    $n= $_POST['primenum'];
    echo primenumber($n);

}

// function primenumber($n){
//     if($n==1){
//         return  $n."this is not prime number";
//     }
//     else if($n==2){
//         return $n."this is a prime number";
//     }
// else {
//     for($i=0;$i<$n;$i++){
//         if($i % $n==0){
//          return $n."this is not a prime number";
//         }
//     }
// }
//     return $n."this is prime number";
// }

function primenumber($n){
    if($n==1){
        return $n."this is not a prime number";
    }
    else if($n==2){
        return $n ."this is a prime number ";

    }
    
    else{
           for($i=0;$i<$n;$i++){
            if($i % $i){
                return $n ."this is not a prime number";
            }
           }
    }
    return $n."this is a prime number";
}

?>

</body>
</html>