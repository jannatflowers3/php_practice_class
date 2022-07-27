<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            background-color:gray;
            color:white;
            font-size:17px;
            width:200px;

        }
        .success{
            color:red;
        }
    </style>
</head>
<body>

    <h1>Login Form</h1>
    <?php
if($_SERVER['REQUEST_METHOD']=="POST"){

    // echo $_POST['login'];
    // echo $_POST['email'];

    $name = $_POST['login'];
    $email = $_POST['email'];
    $errors = array();
if($name ==""){
    $errors[] = "login must be filled up";
}
if($email ==""){
    $errors[] = "email 
    must be filled up";

}

if(strlen($name)>10 || strlen($name)<4){
    $errors[] = "login must be 4 to 8 <br>";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[]  = "please enter valid email address";
}
// echo "<pre>";
// print_r($errors);

// if(count ($errors)==0){
//     echo "login successfull";
// }
if(count($errors)>0){
    echo "<div class='error'> "; 
    foreach($errors  as $err){
        echo "$err <br>";
    }
    echo "</div>";
}

else{
    echo " <div class=\"success\"> login successfull <div>";
}

}
    ?>
    <form action="" method="post">
        <input type="text" name="login"  value ="<?php if(isset($name)) echo $name; ?>" placeholder=" Enter Login name"><br>
        <input type="text" name="email"  value ="<?php if(isset($email)) echo $email ;?>" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="login">
    </form>
</body>
</html>