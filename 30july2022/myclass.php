<?php
class parentclas{}
    class childclass extends parentclas{}
    $obj = new childclass();
    
    if($obj instanceof childclass){
        echo "this is chilclas <br>";
    }
    if($obj instanceof parentclas ){
        echo " this is parent class <br>";
    }



// main clas k extends bariye child class kora hoi
?>