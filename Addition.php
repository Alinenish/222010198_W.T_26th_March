<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Addition</title>
</head>
<body>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$Fullname = $fname+$lname;
		$sum = $num1+$num2;
		echo "<p><h1>Hello fullname  of $fname and $lname is: $Fullname</h1></p>";
		echo "<p><h2>The sum of $num1 and $num2 is : $sum</h1></p>";
	}
?>
</body>
</html>