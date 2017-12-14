<?php include "../../web/views/header.php";?>

<div class="main">
<p>
  <?php
	$search = $_POST['userSearch'];

	include "../model/dbconnection.php";
	
	//input validation for user search
	echo $search;
	//search the database with a query
	//$query = "SELECT * FROM fightscene WHERE name = $search";
	
	mysqli_close($conn);
  ?>
</p>
</div>

<?php include "../../web/views/footer.php";?>