<?php

class  employee{


    private $title;
    private $name;

public const AGE =20;


    public function getName(){
    return    $this->name;

    }

    public function setName($x){
         $this->name=$x;

    }
    public function sayhello(){
       $message = "{$this->name}, welcome to opp";
    //    return $message;
    $message . =SELF::AGE;
    echo $message;
    }
}

$obje1 = new employee;
$obje1->setName("Jannat");
$obje1->sayhello();
echo "<pre>";
var_dump($obje1);
?>