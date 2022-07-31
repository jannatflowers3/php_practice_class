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
   $division = array("dhaka","sylhet","khulna");

   ?>

   <table>
    <tr>
        <th>Division Name</th>
    </tr>
 
   <?php
   foreach($division as $div){?>
    <tr>
        <th>  <?php echo $div;?></th>
    </tr>

   <?php }
 ?>
   </table>

   
   <?php
   $students=array("jannat","sultana");
   $students =array( "1269592","jatrabari");
   $country = array("Bangladesh"=>"Dhaka","Australia"=>"sydney","Nepal"=>"Kathmundo");
   sort($country);
    ?>
    <table>
      <tr>
        <th>district</th>
      </tr>
    </table>
    <?php
   foreach($students as $student){
  
    ?>
    <tr><?php echo $student ?></tr>
   <?php}
   ?><table>


</body>
</html>