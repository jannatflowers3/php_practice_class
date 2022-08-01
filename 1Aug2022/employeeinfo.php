<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $basic =$_POST['basic'];
    $houseRant = $_POST['houseRant'];
    $transport = $_POST['transport'];
    $total = $_POST['total'];
    $total.=$basic+ $houseRant+$transport;

    echo "ID :$id"."<br>";
    echo "Name :$name"."<br>";
    echo "Designation:$designation"."<br>";
    echo "Basic :$basic"."<br>";
    echo "House Rant:$houseRant"."<br>";
    echo "Transport :$transport"."<br>";
    echo "Total : $total";


// aivabe o kora jai

// echo "id" .$_POST['id'];
// echo  "name". $_POST['name'];
// $total= $_POST['basic']+$_POST['houseRant']+$_POST['transport'];
// echo "total :".$total;


}


?>