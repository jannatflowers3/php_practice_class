



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
class result{
    public $id;
    public $name;
    public $batch;
    public $results;

    public function __construct(){
        $datafile = file('user.txt');
        $this->retults = $datafile;
    }
    public function student($studentid){
foreach($this->retults as $student)
list($id,$name,$batch)=explode(" ","$student");
    }
    if($id= $studentid){
        $output = "<h3> id : $id";
    }
}


if(isset($_POST['submt'])){
    $studentid = $_POST['id'];
class result{
 $studentresult = new result;
 echo $studentresult->student($studentid);
}
?>
<form action="" name="post">
    <input type="text" name="id" placeholder=" Enter Login name"><br>
    <input type="text" name="name" placeholder=" Enter Login name"><br>
    <input type="text" name="batch" placeholder=" Enter Login name"><br>

        <input type="submit" name="submit" value="login">
</form>
</body>
</html>