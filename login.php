<?php
	require_once("session.php");
	sStart();
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

	if(isset($_POST['loginBtn'])){

		$user = $_POST['user'];
		$pass =  $_POST['pass'];

		$sql = "SELECT * FROM login where user = '$user' and pass = '$pass'";
		$result = $conn->query($sql);

		if($result-> num_rows > 0){
			while($row= $result->fetch_assoc()){
				$_SESSION['userID'] = $row['userID'];
				$_SESSION['username'] = $row['user'];	

		
			}

			if($user == "tushar")
			{
				header('location:admin.php');	
			}
			else
			{
				header('location:home.php');
			}
			

		
			}
			else{
				?>
				<script> alert('Invalid Username or Password');
				location.href = 'login.html';
				</script>
				<?php

		}
		$conn->close();
	}

?>
