<html>
<head>
</head>
<body>
<?php
	echo $_POST['movie'];
	echo "<br>";
	echo $_POST['year'];
	echo "<br>";
	echo $_POST['startTime'];
	echo "<br>";
	echo $_POST['duration'];
	echo "<br>";
	echo $_POST['link'];
	echo "<br>";
	$myInputs = $_POST["actors"];
	$styles = $_POST['style'];
	$counter = 0;
		foreach ($myInputs as $eachInput) {
			 echo $eachInput . "<br>";
			 echo $styles[$counter] . "<br>";
			 $counter++;
		}
	echo $_POST['description'];
?>
</body>
</html>