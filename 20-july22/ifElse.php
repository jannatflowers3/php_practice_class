
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
// echo $_POST['myname'];
if(isset($_POST['submit'])){



    $guss = 120;
if($_POST['myname']==$guss){
    echo "congratulation! you get 120 marks";
}
else{
    echo "sorry  you have no result";
}
}

?>
    <h1>Guess the Number</h1>
    <form action="" method="post">
        <input type="text" name="myname" plaholder="guss a number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>