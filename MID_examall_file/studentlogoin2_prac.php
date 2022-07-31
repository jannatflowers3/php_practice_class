<?php

class student{
public $result;
    public function __construct{
       $totalresult = file("user.txt");
       $this->result = $totalresult;
    }
    public function jannat($studentresult){
      foreach($this->result as $mydatafile);
      list($id,$name,$phone,$distri) =explode(" ","$mydatafile");
    }
}
?>