<?php
function jannt($n){
     	if($n==1){
     		return $n."thi is not prime number";
     	}


     	else if($n==2){
                return $n."this is also a prime number";
     	}
 else{
 	for($i = 2;$i<$n;$i++){
 		if($n%$i ==0){
 			return $n ."this is also not a prime number";
 		}
 	}
 }
return $n ."this is prime number";
     	
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
	<h1> Prime number</h1>
<?php
     if (isset($_POST['submit'])) {
     	$n = $_POST['name'];
     	echo jannt($n);

     }

	?>


	<form action="" method="post">
		<input type="number" name="name" placeholder="Enter your prime number"><br><br>
		
		<input type="submit" name="submit" value="sunmit">
	</form>

</body>
</html>