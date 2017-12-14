<?php
	include "connection_details.php";
	
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
		die("connection failed: " . mysqli_connect_error());
	}
	
	//create database
	$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
	if (mysqli_query($conn, $sql)) {
		echo "fsdb does not exist and was created successfully";
	} else {
		echo "Error creating fsdb database: " . mysqli_error($conn);
	} 
	
	mysqli_select_db($conn, $dbname);
	
	//create the databases
	//scene table
	$scene = "CREATE TABLE scene (
		scene_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		scene_description varchar(300) NOT NULL,
		film_id int(11) NOT NULL,
		scene_duration int(10),
		scene_start_time int(5),
		scene_weblink varchar(300),
		reg_date TIMESTAMP
	)";
	if (mysqli_query($conn, $scene)) {
		echo "scene table create sucessfully.";
	} else {
		echo "Error creating scene table: " . mysqli_error($conn);
	}
	
	//actor table
	$actor = "CREATE TABLE actor (
		actor_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		actor_name varchar(70) NOT NULL,
		reg_date TIMESTAMP
	)";
	if (mysqli_query($conn, $actor)) {
		echo "actor table create sucessfully.";
	} else {
		echo "Error creating actor table: " . mysqli_error($conn);
	}
	
	//film table
	$film = "CREATE TABLE film (
		film_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		film_title varchar(100) NOT NULL,
		film_year int(4) NOT NULL,
		reg_date TIMESTAMP
	)";
	if (mysqli_query($conn, $film)) {
		echo "film table create sucessfully.";
	} else {
		echo "Error creating film table: " . mysqli_error($conn);
	}
	
	//martial art table
	$martialart = "CREATE TABLE martial_art (
		martial_art_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		martial_art_name varchar(100) NOT NULL,
		reg_date TIMESTAMP
	)";
	if (mysqli_query($conn, $martialart)) {
		echo "martial art table create sucessfully.";
	} else {
		echo "Error creating martial art table: " . mysqli_error($conn);
	}
	
	//actor scene table
	$actorscene = "CREATE TABLE actor_scene (
		film_id int(11) NOT NULL,
		actor_id int(11) NOT NULL,
		reg_date TIMESTAMP,
		PRIMARY KEY (film_id, actor_id)
	)";
	if (mysqli_query($conn, $actorscene)) {
		echo "actor scene table create sucessfully.";
	} else {
		echo "Error creating actor scene table: " . mysqli_error($conn);
	}
	
	//scene martial art table
	$sceneart = "CREATE TABLE scene_art (
		film_id int(11) NOT NULL,
		martial_art_id int(11) NOT NULL,
		actor_id int(11) NOT NULL,
		reg_date TIMESTAMP,
		PRIMARY KEY (film_id, martial_art_id, actor_id)
	)";
	if (mysqli_query($conn, $sceneart)) {
		echo "scene art create sucessfully.";
	} else {
		echo "Error creating scene art table: " . mysqli_error($conn);
	}
	
	echo "fsdb database successfully created";
	
	mysqli_close($conn);
?>