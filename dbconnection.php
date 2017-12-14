<?php
//connect to mySQL
include "connection_details.php";

// Create connection to the server and database
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>