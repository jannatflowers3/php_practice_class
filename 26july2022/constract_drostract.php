<?php
class opp{
        // public function __construct(){
        //     echo "yes ,i am here <br>";
        // }
private $name;
public function __construct($x){
    $this->name = $x;
    echo $this->name . "this is programming language opp <br>";
}
       
        public function sayhellow(){
            echo "hello world <br>";
        }
        public function __destruct(){
            echo " opp object says bye bye ! ";
        }
    }
// new opp diye class k declear kore and output automatically ase
    new opp("jannat <br>");

// $op_publicfun = new opp;
// $op_publicfun->sayhellow();

// hello world k output dekhite hole function name sayhellow k call korte hobe
?>