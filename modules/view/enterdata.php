<html>
<head>
<script language="Javascript" type="text/javascript">
	var counter = 1;
	var limit = 10;
	function addInput(divName){
		 if (counter == limit)  {
			  alert("You have reached the limit of adding " + counter + " inputs");
		 }
		 else {
			  var newdiv = document.createElement('div');
			  newdiv.innerHTML = "Actor " + (counter + 1) + ": <br><input type='text' name='actors[]'><br>Style <input type='text' name='style[]'>";
			  document.getElementById(divName).appendChild(newdiv);
			  counter++;
		 }
	}
</script>
</head>
 <body>
  <form method="post" action="/fsdb/modules/controller/submitdata.php">
   Film name: <input type="text" name="movie"><br>
   Film year: <input type="text" name="year"><br>
   Start time: <input type="text" name="startTime"><br>
   Duration (mins): <input type="text" name="duration"><br>
   Link: <input type="text" name="link"><br>
   <div id="dynamicInput">
          Actor 1: <br><input type="text" name="actors[]">
		  <br>Style <input type="text" name="style[]">
     </div>
   <input type="button" value="Add another actor" onClick="addInput('dynamicInput');">
   <br>Description: <input type="textbox" name="description"><br>
   <input type="submit" name="Submit" value="Submit">
  </form>
 </body>
</html>
