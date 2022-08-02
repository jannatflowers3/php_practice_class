<?php
class fileupload{
	public $id;
	public $name;
	public $batch;
	
	public $result;

	public function __construct(){
		$datafile = file("use.txt");
		$this->result = $datafile;
	}
      public function jannat($file_id){
      	foreach($this->result as $data){
      		list($id,$name,$batch,) =explode(" ","$data");

      		if($id == $file_id){
      			$results = "<h4> ID: $id </h4>";
      			$results .= "<h4> Name: $name </h4>";
      			$results .= "<h4>Batch: $batch </h4>";
      			

      		}
      	}
      	return $results;
      }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Student  name with php</h1>
	<?php  
     if(isset($_POST['submit'])){
     	$mt = $_POST['number'];
     	$fileoutput = new fileupload();
     	echo $fileoutput->jannat($mt);
     }
	 ?>
	<form action="" method="post">
		<input type="number" name="number" placeholder="Enter you id"><br><br>
		<input type="submit" name="submit" value="search">
	</form>
</body>
</html>