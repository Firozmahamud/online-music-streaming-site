<?php

	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "player";

	//create connection 

	$conn = mysqli_connect($server,$username,$pass,$db);

	//check conncetion

	if($conn->connect_error){

		die ("Connection Failed!". $conn->connect_error);
	}


	$user = $_POST['username'];
	$pass = $_POST['password'];

	

	if(isset($_POST['RegBtn']))
	{
		$check = $conn->query("SELECT * FROM login WHERE user='$user'");

		if(mysqli_num_rows($check)>0)
		{
			?>
			<script>
				alert("Username Already Exists.");
				location.href = 'registration.html';
			</script>
				
			<?php 
		}

		else
		{
			$sql= "INSERT INTO login(user, pass) values('$user', '$pass')";
			$conn->query($sql);
			?>
			<script>
				alert("Registration Successful.");
				location.href = 'login.html';
			</script>
				
			<?php
		}
	}
?>