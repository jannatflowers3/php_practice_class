<?php
class student{
public $result;
public function __construct(){
    $firstvalue = file('user.txt');
    $this->result= $firstvalue;

}
public function jannat($sdtudentid){

    foreach($this->result as $mydata){
        list($id,$name,$phone,$district) =explode(" ", $mydata);
        if($id==$sdtudentid ){
             $outut = "<p> your id is : $id </p>";
             $outut.= "<p> your name : $name</p>";
             $outut.= "<p> your phone is : $phone </p>";
             $outut.= "<p> your district is : $district </p>";
        }

        
    }
    return $outut;

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>student information</h1>
    <?php
if(isset($_POST['mysubmit'])){
    $sdtudentid= $_POST['myinpuid'];
    $myoutput  =new student;
    echo $myoutput->jannat($sdtudentid);
}

?>
    <form action="" method ="post">
        <input type="number" name="myinpuid" placeholder="enter your id"><br>
        <input type="submit" name ="mysubmit" value ="search">
    </form>
</body>
</html>