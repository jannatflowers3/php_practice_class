
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Student Grade Pint </h1>
<form action="" method="post">
		<input type="text" name="name" placeholder="Enter your Grade"><br><br>
		
		<input type="submit" name="submit" value="Lgoin">
	</form>


	<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];

if($name == "A"){
    echo "Excellent";
}
else if($name == "B"){
    echo "good";
}
else if($name == "C"){
    echo "fair";
}
else if($name == "D"){
    echo "poor";
}
else if($name == "E"){
    echo "failur";
}
}
	?>

</body>
</html>