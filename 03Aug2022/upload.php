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

    echo "<pre>";
    print_r($_FILES);


?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo"><br><br>
        <input type="submit" name = "submit" value="Upload"> 
    </form>
</body>
</html>