<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
    $guss = 150;

    if($_POST['myname']==$guss){
        echo "congratulation";
    }
else if(abs($guss-$_POST['myname'])<10){
    echo "you are very close";
}
    else{
        echo "sorry number dosnt's matched";
    }
}


?>
    <h1>Guess the number</h1>
    <form action="" method="post">
        <input type="text " name="myname" placeholder="enter your name">
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html>
