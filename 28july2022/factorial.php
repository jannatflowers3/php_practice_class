<?php
// function jannat($n){
//     if($n==0){
//         return 1;
//     }
//     return $n * jannat($n-1);
// }
// echo jannat(6);



    // public $rannumb ;
  function number($n){
        if($n==0){
                    return 1;
                }
                return $n * number($n-1);
            }


            // 2nd nukmber 
            
function jannat($n){
    if($n == 0){
        return 1;
    }
    return $n *jannat($n-1);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial Number</h1>
    <?php
if(isset($_POST['submit'])){
    $data= $_POST['id'];
    echo jannat($data);
}
    ?>
<form action="" method="post">
    <input type="number" name="id" ><br>
    <input type="submit" name="submit" value="login">
</form>



  <?php
// if(isset($_POST['mysubmit'])){
//     $n =$_POST['mynumber'];
//     echo number($n);
 
// }
  ?>
    <!-- <form action="" method="post">
        <input type="number" name="mynumber" placeholder="Enter Your factoral number"><br>
        <input type="submit" name ="mysubmit" value="search">
    </form> -->
</body>
</html>