<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Login Form</h1>
    <?php
if(isset($_POST['submit'])){

    // echo $_POST['login'];
    // echo $_POST['email'];

    $name = $_POST['login'];
    $email = $_POST['email'];
if(strlen($name)>8 || strlen($name)<4){
    echo "invalid login name <br>";
}
if($name==""||$email==""){
    echo "enter you name<br>";
}
else {
    echo "valid login<br>";
}
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "valid email address";
}
else{
    echo "Invalid email address";
}


    // echo $name."<br>" .$email;
}
    ?>
    <form action="" method="post">
        <input type="text" name="login" placeholder=" Enter Login name"><br>
        <input type="text" name="email" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="login">
    </form>
</body>
</html>