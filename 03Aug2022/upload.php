<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Handling file upload</h1>
    <?php

   if(isset($_POST['submit'])){
    $name = $_FILES['file']['name'];
    $ext = explode(".",$name);
    $ext = end($ext);

    $type = $_FILES['file']['type'];
    $tmp = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $size = $_FILES['file']['size'];

    $errors = array();
    $filetype = array("jpg","png");

    if(!in_array($ext,$filetype)){
        $errors[]=" File type must be JPG AND PNG";
    }
    if($size>1024*100){
        $errors[]= "file size musts be within 100kb";
    }
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err . "<br>";
        }
        echo "<br>";
    }
    else{
        $result =move_uploaded_file($tmp,"file_upload_img/".$name);
 if($result == 1){
    echo "upload successfully";
 }
    }

   }


?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="name"><br><br>
        <input type="submit" name = "submit" value="Upload"> 
    </form>
</body>
</html>