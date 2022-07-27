<?php
class student{

    public $id;
    public $name;
    public $batch;
public $result;

public $line;
    public function __construct(){
            $lines = file("userfile.txt");
            $this->line = $lines;
    }
    public function student_result($myid){
            // $this->id =$myid;
       $data =  file("userfile.txt");
       foreach($data as $data_lines){
        list($id,$name,$batch,$pass_fail) = explode("," , $data_lines);
        if($id ==$myid){
            $output = "<h2>ID: $id  </h2>";
            $output .= "<h1>Name : $name  </h1>";
            $output .= "<h2>Batch : $batch </h2>";
            $output .=  "<h2>Result : $pass_fail </h2>";

            // echo "<h2>ID: $id  </h2>";
            // echo " <h2>Name : $name  </h2>";
            // echo "<h2>Batch : $batch </h2>";
            // echo "<h2>Result : $pass_fail </h2>";
            // echo korle output ar jonno return dite hoi na

        }
       }

       return $output;
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
    <?php
if(isset($_POST['search'])){
    $myid = $_POST['formname'];
    $allresult = new student;
   echo  $allresult->student_result($myid);
}
    ?>
<form action="" method ="post">
    <input type="text" name="formname">
    <input type="submit" name="search" value = "SEARCH">
</form>
</body>
</html>