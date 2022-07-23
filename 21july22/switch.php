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
    if(isset($_GET['submit'])){
        // echo $_GET['cat'];


        $cat =$_GET['cat'];
        switch($cat){
          case "news":
            echo " you have selected news.";
            break;
            case "weather": echo "You have selected weather.";  
          break;
            case "sport":
                echo "you have selected sports.";
                break;
                default : echo "you must select a catagory.";
        }
    }
?>
    <h1>switch parent</h1>
    <form action="">
       <select name="cat">
       <option value=""> select one</option>
        <option value="news"> News</option>
        <option value="weather"> weather</option>
        <option value="sports"> sports</option>
       </select>
       <input type="submit" name="submit" value="check">
    </form>
</body>
</html>