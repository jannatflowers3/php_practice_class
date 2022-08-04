<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contact with US</h2>
    <?php
  extract($_POST);
  $toemail = "jannatflowersweb@gmail.com";
 if( mail($mail,$subject,$message)){
    echo "sent successfully";
 }

//  $mail a server a mail sent korte hole jai mail a pathano hobe sei mail ar name dite obe
    ?>
    <form action="" method="post" >
        <input type="text"name="email" placeholder="enter your email"><br><br>
        <input type="text"name="name" placeholder="enter your name"><br><br>
        <input type="text"name="subject" placeholder="enter your subject"><br><br>
        <textarea name="message"  placeholder="enter your message"></textarea>
        <input type="submit" name="submit" value="send">

        
    </form>
</body>
</html>