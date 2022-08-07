<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>file upload</h1>
<?php
if(isset($_POST['submit'])){

// print_r($_FILES);
$name = $_FILES['file']['name'];
$name_ext = explode('.',$name);
$name_ext = end($name_ext);
$type = $_FILES['file']['type'];
$filetype = array("jpg","png");

$tmp = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];
$size = $_FILES['file']['size'];

// file folder name == file_upload_img
$errors = array();

if(!in_array($name_ext,$filetype)){
    $errors[] = "file type must be jpg and png";
}

if($size>1024*500){
    $errors[]="FILE SIZE MUST BE WITHIN 500KB";
}
if(count($errors)>0){
    foreach($errors as $err){
       echo $err ."<br>"; 
    }
}
else{
   $result =  move_uploaded_file($tmp,'file_upload_img/'.$name);
   if($result==1){
    echo "uploded successfully";
   }
}
}
?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <input type="submit" name = "submit" value="Upload"> 
    </form>
</body>
</html>