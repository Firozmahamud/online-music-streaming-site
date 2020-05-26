<?php
	$id = $_GET['userid'];
	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "player";

	$conn = mysqli_connect($server,$username,$pass,$db);

	if($conn->connect_error){

		die ("Connection Failed!". $conn->connect_error);
	}

	$sql = "DELETE FROM songs where songID = '$id'";
	$conn->query($sql);
	$conn->close();
?>