<!DOCTYPE html>
<html>
<head>
	<title>FSDB Search Results</title>
	<link rel="stylesheet" href="/fgdb/css/samplestyle.css">
</head>
<body>
<?php include "header.php";?>

<div class="main">
<p>
  <?php
	$search = $_POST['userSearch'];

	echo "Search results<br>";
	echo "$search";
  ?>
</p>
</div>

<?php include "footer.php";?>
</body>
</html>