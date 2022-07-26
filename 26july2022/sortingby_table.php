<?php
   $countrys = array(
    // $countrys = array();
    // $countrys["bangladesh"] = array("tamim","sakib","rahim");
    // $countrys["srilanka"]=array("sangakara","dilshan","mahela");
    // $countrys["australia"]= array("smith","maxwell","warner");



  "Bangladesh"=>"Dhaka",
    "Srilanka"=>"Colombo",
    "Nepal"=>"Kathmundu"
);


asort($countrys);
// print_r($countrys);
//    $countr_sort = sort($division);

?>
<table border="1">
<tr>
    <th>Countray Name</th>
    <th>Capital</th>
    <!-- <th>population</th> -->
</tr>
<?php  
foreach($countrys as $country=>$population){?>
 <tr>
    <td><?php  echo $country; ?></td>
    <td><?php echo $population; ?></td>

 </tr>

<?php 
}
?>
 </table>