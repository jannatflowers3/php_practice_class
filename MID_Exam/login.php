<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Valid a login</h1>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $validname = 0;
    $validemail = 0;
}

if($name ="" && $email =""){
    echo "enter your name  and enter your email<br>";
    return 0;
}

if($name==""){
    echo "enter your name first <br>";
}
 if(strlen($name)>8 || strlen($name)<4){
    echo "you must have 8 charater <br>";
}
else{
    $validname = 1;
}

if($email=""){
    echo "enter your email first <br>";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "invalid email <br>";
}
else{
    $validemail = 1;
}

if($name =1 && $email =1){
    echo "login successfully ";
}
?>
<form action="" method="post">
    <input type="text" name="name" placeholder=" Enter Login name"><br>
        <input type="email" name="email" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="login">
</form>
</body>
</html>